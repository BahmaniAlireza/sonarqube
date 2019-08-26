<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Zarinpal\Zarinpal;

class RePay extends Controller
{
    public function pay(Request $request) {
        $zarinpal = new Zarinpal('55b346f4-926c-441c-97cb-033f5bef37d4');
        $order = Order::where('id',$request->order_id )->first() ;
        $results = $zarinpal->request(
            "http://localhost:8080/callback/".$order->id."",          //required
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
