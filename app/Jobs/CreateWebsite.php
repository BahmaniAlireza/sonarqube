<?php

namespace App\Jobs;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class CreateWebsite implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
//    protected $user_id;
//    protected $address;

    protected $order;
    public function __construct(Order $order)
    {
        Log::info("st");
        $this->order = $order;
        Log::info("end");

    }

    /**
     * Execute the job.
     *
     * @return void
     */

    public function handle()
    {


        //Log::info("started");
        $order_id = $this->order->id;
        $domain = $this->order->domain;
        //Log::info("order id: $order_id");
        $themeFolder =  public_path("themes/wp-themes/".$this->order->theme->src."");
        $public = public_path("orders");
        //Log::info("themeFolder : $themeFolder");
        $result = mkdir("$public/$domain", 0777, true);
        //Log::info("file Res : $result");
        $folder = public_path("orders/$domain");
        //Log::info("folder : $folder");
        shell_exec("cd $folder ; wp core download ; ");
        shell_exec("cd $folder ; wp config create --dbhost=127.0.0.1 --dbname=xa112-$order_id --dbuser=root --dbpass=MyNewPass --locale=fa_IR ");
        shell_exec("cd $folder ; wp db create ");




        //$pass = str_random(10);
        $pass = '1234';
        $this->order->password = $pass;
        $site_title = $this->order->site_name;
        $username = $this->order->username ;
        $password = $this->order->password ;
        $email = $this->order->email ;


        shell_exec("cd $folder ; wp core install --url=http://localhost:8000/orders/$domain --title=sfsdfsdfd --admin_user=$username --admin_password=$password --admin_email=$email");
        shell_exec("cd $folder ; wp language core install fa_IR");
        shell_exec("cd $folder ; wp language core install fa_IR --activate");

        // copy theme
         shell_exec("cp -R $themeFolder $folder/wp-content/themes  ; ");
         shell_exec("cd $folder ; wp theme activate ".$this->order->theme->src);

        Log::info("31231313231 : $this->order->options ");




          foreach ($this->order->options as $plugin)
          {
              $install_plugin = shell_exec("cd $folder ; wp plugin install ".$plugin->name." --activate") ;
          }


        shell_exec("cd $folder ; wp plugin install persian-woocommerce --activate") ;
        shell_exec("cd $folder ; wp plugin install wordpress-importer --activate") ;
        $i = shell_exec("cd $folder  ; wp import wp-content/themes/".$this->order->theme->src."/".$this->order->theme->src.".xml --authors=create ") ;
        echo $i ;
        $this->order->status = true;
        $this->order->save();
        Log::info("heeey");
    }
}

