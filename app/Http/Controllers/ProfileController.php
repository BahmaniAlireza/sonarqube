<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request) {
        //$user_id= \Auth::user()->id;
        //Order::with('options')->get();
        $orders = $request->user()->orders()->with(['theme','options'])->get();
        //return $orders;
       //  $orders= Order::with('theme','plugins')->where('user_id',$user_id)->get();
        return view('profile',['orders'=>$orders ]);
    }
}
