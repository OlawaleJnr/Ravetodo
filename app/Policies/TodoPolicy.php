<?php

namespace App\Policies;

use App\Todo;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class TodoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->id === auth()->user()->id;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Todo  $todo
     * @return mixed
     */
    public function view(User $user, Todo $todo)
    {
        return $user->id === $todo->user_id ? Response::allow() : Response::deny('You do not have the access to view this todo indepth');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->id === auth()->user()->id ? Response::allow() : Response::deny('You do not have the access to create this Todo');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Todo  $todo
     * @return mixed
     */
    public function update(User $user, Todo $todo)
    {
        return $user->id === $todo->user_id ? Response::allow() : Response::deny('You do not have the access to edit/update this Todo');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Todo  $todo
     * @return mixed
     */
    public function delete(User $user, Todo $todo)
    {
        return $user->id === $todo->user_id ? Response::allow() : Response::deny('You do not have the access to delete this Todo');
    }

    /**
     * Determine whether the user can mark the model as complete.
     *
     * @param  \App\User  $user
     * @param  \App\Todo  $todo
     * @return mixed
     */
    public function complete(User $user, Todo $todo)
    {
        return $user->id === $todo->user_id ? Response::allow() : Response::deny('You do not have the access to mark this todo as completed');
    }

    /**
     * Determine whether the user can mark the model as incomplete.
     *
     * @param  \App\User  $user
     * @param  \App\Todo  $todo
     * @return mixed
     */
    public function incomplete(User $user, Todo $todo)
    {
        return $user->id === $todo->user_id ? Response::allow() : Response::deny('You do not have the access to mark this todo as completed');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Todo  $todo
     * @return mixed
     */
    public function restore(User $user, Todo $todo)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Todo  $todo
     * @return mixed
     */
    public function forceDelete(User $user, Todo $todo)
    {
        //
    }
}
