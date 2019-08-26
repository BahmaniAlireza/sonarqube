<?php
use App\Models\Order;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sahifa = new Order();
        $sahifa->price = "2000000";
        $sahifa->status = true ;
        $sahifa->site_name = "mohamad.co";
        $sahifa->username = "mohamadYaraghi";
        $sahifa->password = "1234";
        $sahifa->email = "yaraghi77@gmail.com";
        $sahifa->dns1 = "";
        $sahifa->dns2 = "";
        $sahifa->domain = "";
        $sahifa->host_id = "1";
        $sahifa->user_id = "1";
        $sahifa->payed = false;
        $sahifa->save();
    }
}
