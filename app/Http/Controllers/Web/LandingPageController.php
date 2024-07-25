<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Facade\Web\LandingPageFacade;

class LandingPageController extends Controller
{
    public function index() {
        return view("template", LandingPageFacade::index());
    }
}
