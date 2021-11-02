<?php

namespace App\Observers;

use App\User;
use App\Group;

class UserObserver
{
    public function created(User $user)
    {
        // $group = Group::where('kode_referensi', $user->group_id)
        //             ->first();
        // if ($group==null) {
        //     $group = Group::where('id', $user->group_id)
        //             ->first();
        //     $user->group_main_id = $group->group_id;
        // } else {
        //     $user->group_main_id = $group->group_id;
        // }
        // $user->save();
    }
}
