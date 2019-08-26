<?php

use Illuminate\Database\Seeder;
use \App\Models\Theme;
class ThemesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$themes= [[ "name" => "asdasdasdasd" ]];
        $sahifa = new Theme();
        $sahifa->title = "صحیفا";
        $sahifa->name = "sahifa theme";
        $sahifa->src = "sahifa";
        $sahifa->img = "screenshot.png";
        $sahifa->dir = "";
        $sahifa->price = "8000000";
        $sahifa->tag = "shop";
        $sahifa->rate = "6";

        $sahifa->save();


        $sahifa = new Theme();
        $sahifa->title = "پاندا";
        $sahifa->name = "pocono theme";
        $sahifa->src = "pocono";
        $sahifa->img = "screenshot.jpg";
        $sahifa->dir = "";
        $sahifa->price = "250000";
        $sahifa->tag = "landing";
        $sahifa->rate = "6";
        $sahifa->save();


        $sahifa = new Theme();
        $sahifa->title = "مجله مترو";
        $sahifa->name = "Metro Magazine Mitra Theme";
        $sahifa->src = "metro-magazine-mitra";
        $sahifa->img = "screenshot.png";
        $sahifa->dir = "";
        $sahifa->price = "320000";
        $sahifa->tag = "shop";
        $sahifa->rate = "6";
        $sahifa->save();


        $sahifa = new Theme();
        $sahifa->title = "دهکده";
        $sahifa->name = "Storevilla Theme";
        $sahifa->src = "storevilla-mitra";
        $sahifa->img = "screenshot.png";
        $sahifa->dir = "";
        $sahifa->price = "5000000";
        $sahifa->tag = "blog";
        $sahifa->rate = "6";
        $sahifa->save();


        $sahifa = new Theme();
        $sahifa->title = "بیزنس ";
        $sahifa->name = "Business Portfolio Theme";
        $sahifa->src = "Business PortfolioMitra";
        $sahifa->img = "screenshot.png";
        $sahifa->dir = "";
        $sahifa->price = "2400000";
        $sahifa->tag = "blog";
        $sahifa->rate = "6";
        $sahifa->save();


        $sahifa = new Theme();
        $sahifa->title = "بیگ تم";
        $sahifa->name = "BIG Nexus Theme";
        $sahifa->src = "BIG-Nexus";
        $sahifa->img = "screenshot.png";
        $sahifa->dir = "";
        $sahifa->price = "1000000";
        $sahifa->tag = "landing";
        $sahifa->rate = "3";
        $sahifa->save();


    }
}
