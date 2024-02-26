<?php

namespace App\Policies;

use App\Models\Business;
use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(?User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(?User $user, Post $post)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool|void
     */
    public function create_note(User $user)
    {
        if ($user->isActingAsBusiness() && $user->can('note_create')) {
            return true;
        } elseif (!$user->isActingAsBusiness()) {
            return true;
        }
    }
    public function create_hint(User $user)
    {
        if ($user->isActingAsBusiness() && $user->can('hint_create')) {
            return true;
        } elseif (!$user->isActingAsBusiness()) {
            return true;
        }
    }
    public function create_blog(User $user)
    {
        if ($user->isActingAsBusiness() && $user->can('blog_create')) {
            return true;
        } elseif (!$user->isActingAsBusiness()) {
            return true;
        }
    }
    public function create(User $user)
    {
        if (!$user->isActingAsBusiness()) {
            return true;
        }

        if ($user->canAny(['note_create', 'hint_create', 'blog_create'])) {
            return true;
        }

        return false;

        //        return true;
        //        $business = $user?->actingAsBusiness();
        //
        //        if ($business && $user->businesses->contains($business) && $user->can($post->type . '_create')) {
        //            //user belongs to a business and can edit
        //            return true;
        //        } elseif ($user->can('blog_create')) {
        //            // blog owner can edit it
        //            return true;
        //        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Post $post)
    {
        $business = $user->actingAsBusiness();

        if ($post->business && $post->business->is($business) && $user->can($post->type . '_edit')) {
            //user belongs to a business and can edit
            return true;
        }
        // blog owner can edit it
        return $user->id == $post->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Post $post)
    {
        $business = $user->actingAsBusiness();

        if ($post->business && $post->business->is($business) && $user->can($post->type . '_delete')) {
            //user belongs to a business and can delete
            return true;
        }
        // blog owner can delete it
        return $user->id == $post->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Post $post)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Post $post)
    {
        return false;
    }
}
