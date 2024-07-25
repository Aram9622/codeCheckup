<?php

namespace App\Http\Controllers\Web\Auth;

use App\Facade\Web\Auth\UserFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;

class RegisterController extends Controller
{
    public function register(RegistrationRequest $request): void
    {
        decodeEncryptedPassword($request);
        $user = UserFacade::register($request->validated());
        UserFacade::sendMessage($user);
    }
}
