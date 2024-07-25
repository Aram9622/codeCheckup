<?php
namespace App\Facade\Web;
use Illuminate\Support\Facades\Facade;
class LandingPageFacade extends Facade {
    protected static function getFacadeAccessor() { return "landing_page"; }
}
