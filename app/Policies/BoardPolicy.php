<?php

namespace App\Policies;

use App\Models\Board;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BoardPolicy
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

    public function update(User $user, Board $board){
        return $user->id === $board->user->id;
    }

    public function destroy(User $user, Board $board){
        return $user->id === $board->user->id;
    }
}
