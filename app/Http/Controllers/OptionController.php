<?php

namespace App\Http\Controllers;


use App\Models\Host;
use App\Models\Plugin;
use App\Models\Theme;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class OptionController extends Controller
{


    public function  SendOrder (Request $request) {
        $request->input('siteName');
        return $request ;
    }

    public function showThemeDetails($id){
        //$data['data'] = DB::table('themes')->where('id', $id)->get();
        $theme = Theme::whereId($id)->firstOrFail();

        $plugins = Plugin::all();
        $hosts = Host::all();

        if(isset($theme)){
            return view('options',['theme' => $theme, 'plugins' => $plugins, 'hosts' => $hosts]);
        }else {
            return view('options');
        }

    }
}
