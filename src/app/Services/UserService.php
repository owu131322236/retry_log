<?php
// これはControllerに再利用するためのServiceクラス
namespace App\Services;

use App\Models\User;
use App\Http\Controllers\UserController;

class UserService
{
    public function getUserProfile($userId)
    {
        return User::select('id', 'name', 'image', 'bio')
            ->withCount(['posts', 'challenges', 'followers', 'followings'])
            ->find($userId);
        // 使用時はControllerにcurrentUserの値が必要！
        // getProfileContextの使用も必要！
    }
    public function getProfileContext(User $currentUser, User $profileUser)
    {
        return [
            'isOwnProfile' => $currentUser->id === $profileUser->id,
            'isFollowing' => $currentUser->followings()
                ->where('followee_id', $profileUser->id)
                ->exists(),
        ];
    }
}
