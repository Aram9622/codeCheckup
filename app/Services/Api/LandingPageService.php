<?php 

namespace App\Services\Api;
use App\Models\LandingPage;
use Illuminate\Support\Facades\DB;


class LandingPageService {
    public static function index(){
        // get landing page data
        $landingPage = LandingPage::query()
            ->orderBy("sort","ASC")
            ->get()
            ->map(function($item){
                $section = json_decode($item->section, true);
                if(array_key_exists("model", $section)){
                    if(strpos($section["model"], ".")){
                        $condition = explode(".", $section["model"]);
                        list($modelName, $where) = $condition;
                        $model = "App\\Models\\".$modelName;
                        $query = $model::where("type", $where == "service" ? 0 : 1)->orderBy("sort","ASC")->get();
                    }
                    else {
                        $model = "App\\Models\\".$section["model"];
                        $query = $model::orderBy("sort", "ASC")->get();
                    }
                    $item->modelData = $query;
                }
                return $item;
            });
        // get menus

        $menus = DB::table('menus')
        ->select(["menu_items.title", "menu_items.route", "menu_items.parameters" ])
        ->join('menu_items', 'menus.id', '=','menu_items.menu_id')
        ->where("menus.id", 2)
        ->orderBy("menu_items.order", "ASC")
        ->get();
        $socialLinks = DB::table('menus')
        ->select(["menu_items.title", "menu_items.route", "menu_items.parameters","menu_items.icon_class" ])
        ->join('menu_items', 'menus.id', '=','menu_items.menu_id')
        ->where("menus.id", 3)
        ->orderBy("menu_items.order", "ASC")
        ->get();
        return compact("landingPage", "menus", "socialLinks");
    }
}