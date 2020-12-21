<?php

namespace App\Policies;

use App\Models\News;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NewsPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function delete(User $user, News $news)
    {
        return ($user->id === $news->user_id || $user->role= 'admin');
    }

    public function update(User $user, News $news)
    {
        return ($user->id === $news->user_id || $user->role= 'admin');
    }
}
