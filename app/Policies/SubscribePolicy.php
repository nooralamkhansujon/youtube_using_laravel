<?php

namespace App\Policies;

use App\User;
use App\Subscriber;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubscribePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the subscriber.
     *
     * @param  \App\User  $user
     * @param  \App\Subscriber  $subscriber
     * @return mixed
     */
    public function view(User $user, Subscriber $subscriber)
    {
        //
    }

    /**
     * Determine whether the user can create subscribers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the subscriber.
     *
     * @param  \App\User  $user
     * @param  \App\Subscriber  $subscriber
     * @return mixed
     */
    public function update(User $user, Subscriber $subscriber)
    {
        //
    }

    /**
     * Determine whether the user can delete the subscriber.
     *
     * @param  \App\User  $user
     * @param  \App\Subscriber  $subscriber
     * @return mixed
     */
    public function delete(User $user, Subscriber $subscriber)
    {
        //
    }

    /**
     * Determine whether the user can restore the subscriber.
     *
     * @param  \App\User  $user
     * @param  \App\Subscriber  $subscriber
     * @return mixed
     */
    public function restore(User $user, Subscriber $subscriber)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the subscriber.
     *
     * @param  \App\User  $user
     * @param  \App\Subscriber  $subscriber
     * @return mixed
     */
    public function forceDelete(User $user, Subscriber $subscriber)
    {
        //
    }
}
