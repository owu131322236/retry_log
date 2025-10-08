<?php
// これはControllerに再利用するためのServiceクラス
namespace App\Services;

use App\Models\User;

class UserService
{
    public function getUserProfile($userId)
    {
        return User::select('id', 'name', 'image', 'bio')
            ->withCount(['followers', 'followings'])
            ->get();
    }
}
