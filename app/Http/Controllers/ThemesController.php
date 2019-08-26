<?php

namespace App\Http\Controllers;

use App\Jobs\CreateWebsite;
use App\Models\Plugin;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThemesController extends Controller
{


    public function insert(Request $request) {
        $name = $request->input('name');
        $data = array('name'=>$name);
        DB::table('themes')->insert($data);
        echo 'success' ;


        return view('theme');
    }


    public function show() {
        $data = Theme::all();

        $tags = Theme::select('tag')->distinct()->get();
        if(count($data) > 0){
            return view('theme',['data' => $data, 'tags' => $tags]);
        }else {
            return view('theme');
        }


        // TEST DISPATCH JOB
        CreateWebsite::dispatch($order);



    }


      

}
