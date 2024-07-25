<?php

namespace App\Facade\Web\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Facade;

/**
 * @method static register(array $data): Model|Builder
 * @method static sendMessage(User $user): void
 */
class UserFacade extends Facade {
    protected static function getFacadeAccessor(): string
    {
        return "user";
    }
}
