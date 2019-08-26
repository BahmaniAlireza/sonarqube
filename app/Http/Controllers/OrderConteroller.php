<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Zarinpal\Zarinpal;




class OrderConteroller extends Controller
{




    public function index(Request $request)
    {
        $user = $request->user;
        $orders = $user->orders;

        $successfulOrders = $user->orders()->where('status','true')->get();

    }
    public function order($order_id){


     //   $order = Order::find($order_id);
   //     CreateWebsite::dispatch($order);
        /*
                $order = new Order();
                $order->save();

                CreateWebsite::dispatch($order);
        /*
                 //shell_exec("cd orders/$order_id") ;
                  $data = Order::find(2);
                mkdir("orders/$order_id", 0777, true);
                  shell_exec("cd orders/$order_id ; wp core download ; ");
                  shell_exec("cd orders/$order_id ; wp config create --dbhost=127.0.0.1 --dbname=$order_id --dbuser=root --dbpass=MyNewPass --locale=fa_IR ");
                  shell_exec("cd orders/$order_id ; wp db create ");
                  shell_exec("cd orders/$order_id ; wp core install --url=http://localhost:8000/orders/$order_id --title=Example --admin_user=supervisor --admin_password=strongpassword --admin_email=info@example.com ");
                //copy theme
                  shell_exec("cp -R themes/wp-themes/storevilla-mitra orders/$order_id/wp-content/themes  ; ");
                  shell_exec("cd orders/$order_id ; wp theme activate storevilla-mitra ");
        */
        return "<a href='http://localhost:8000/orders/".$order_id."' target='_blank'>dsasad</a>";

    }
    public function newOrder(Request $request) {

        $order = new Order();
        $order->price = "0";
        $order->status = false;
        $order->payed = false;
        $order->site_name = $request->siteName_en;
        $order->username = $request->site_username;
        $order->password = $request->site_password;
        $order->email = $request->site_email;
        $order->host_id = $request->host_id  ;

        if ($request->domain_state == 1 ){
            $order->domain = $request->site_subdomain;
            $order->dns1 = "";
            $order->dns2 = "";
        }else{
            $order->domain = "";
            $order->dns1 = $request->site_dns1;
            $order->dns2 = $request->site_dns2;
        }


        $order->user_id = \Auth::user()->id ;
        $order->theme_id = $request->theme_id;
        $order->save();

        $payment_price = $order->theme->price ;

        //$order->options()->sync($request->plugins_id);
        $plugins_array = explode(",",$request->plugins_id);
        $order->options()->sync($plugins_array);

        foreach ($order->options as $plugin) {
            $payment_price = $payment_price + $plugin->price;
        }
        $price = $payment_price + $order->host->price;
        $order->price = $price;
        $order->save();










        $zarinpal = new Zarinpal('55b346f4-926c-441c-97cb-033f5bef37d4');

// $zarinpal->isZarinGate(); // active zarinGate mode
        $results = $zarinpal->request(
            "http://localhost:8000/callback/".$order->id."",          //required
            100,                                  //required
            'testing',                             //required
            'me@example.com',                      //optional
            '09100000000',                   //optional
            json_encode([                          //optional
                "Wages" => [
                    "zp.1.1"=> [
                "Amount"=> 120,
                "Description"=> "part 1"
            ],
            "zp.2.5"=> [
            "Amount"=> 60,
                "Description"=> "part 2"
            ]
        ]
    ])
);
//echo json_encode($results);
if (isset($results['Authority'])) {

    $payment = new Payment();
    $payment->order_id = $order->id ;
    $payment->price = $order->price ;
    $payment->autotrain = $results['Authority'] ;
    $payment->save();


    file_put_contents('Authority', $results['Authority']);
    $zarinpal->redirect();
}




    }
}
