<?php

namespace App\Services\Web\Auth;

use App\Mail\RegisterMail;
use App\Models\User;
use \Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserService
{
    public static function register(array $data): Model|Builder
    {
        self::hashPassword($data);
        return User::query()->create($data);
    }

    public static function sendMessage(User $user): void
    {
        Mail::to($user->email)->send(new RegisterMail($user));
    }

    private static function hashPassword(array &$data): void
    {
        $data["password"] = Hash::make($data["password"]);
    }
}
