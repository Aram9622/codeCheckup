<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Facade\Api\LandingPageFacade;

class LandingPageController extends Controller
{

    public function index() {
        return response()->json(LandingPageFacade::index());
    }
}
