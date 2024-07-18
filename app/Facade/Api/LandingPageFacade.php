<?php 
namespace App\Facade\Api;
use Illuminate\Support\Facades\Facade;
class LandingPageFacade extends Facade {
    protected static function getFacadeAccessor() { return "landing_page"; }
}