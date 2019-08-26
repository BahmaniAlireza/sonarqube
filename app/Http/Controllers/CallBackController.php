<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Payment;
use App\Jobs\CreateWebsite;
use Illuminate\Support\Facades\Log;
class CallBackController extends Controller
{

    public function  order (Request $request) {

        if ($request->Status == "OK"){

            $pay = Payment::where('autotrain',$request->Authority )->first() ;
            $pay->status = true ;
            $pay->save();
            $order = Order::where('id',$request->order_id)->first();
            $order->status = true ;
            $order->save();

            if ($order->payed) {
                $user_id= \Auth::user()->id;
                Order::with('user')->get();
                $orders= Order::with('theme')->where('user_id',$user_id)->get();
                return view('callback',['status' => true, 'autotrain' => $request->Authority , 'payment_id' => $pay->id, 'text' => 'پرداخت با موفقیت ثبت شد'
                    , 'order_id' => $order->id]);

            }else {
                $order->payed = true ;
                $order->save();
                Log::info("dispatching");
                CreateWebsite::dispatch($order);
                $user_id= \Auth::user()->id;
                Order::with('user')->get();
                $orders= Order::with('theme')->where('user_id',$user_id)->get();
                return view('callback',['status' => true, 'autotrain' => $request->Authority , 'payment_id' => $pay->id, 'text' => 'پرداخت با موفقیت ثبت شد'
                    , 'order_id' => $order->id]);
            }






        }else{
            $pay = Payment::where('autotrain',$request->Authority )->first() ;
            $pay->status = false ;
            $pay->save();
            $order = Order::where('id',$request->order_id)->first();
            $order->status = false ;
            $order->save();
                return view('callback',['status' => false, 'autotrain' => $request->Authority , 'payment_id' => $pay->id ,'text' => "پرداخت شما ناموفق بود"
                    , 'order_id' => $order->id]);
        }

    }
}
