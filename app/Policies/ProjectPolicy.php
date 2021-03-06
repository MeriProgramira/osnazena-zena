<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Project;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectPolicy
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

    public function delete(User $user, Project $project)
    {
        return ($user->id === $project->user_id || $user->role= 'admin');
    }

    public function update(User $user, Project $project)
    {
        return ($user->id === $project->user_id || $user->role= 'admin');
    }
}
