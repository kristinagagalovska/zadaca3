<?php

namespace App\Repositories;

use App\Repositories\UsersRepositoryInterface;
use App\User;

class DataBaseUsersRepositoryInterface implements UsersRepositoryInterface
{
    public function store($user)
    {
        $user->save();
    }

    public function all()
    {
        $users = User::all()->all();
        
        return $users;
    }

    public function searchByName($name)
    {
        $users = User::where('name', 'LIKE', '%'.$name.'%')->get()->all();

        return $users;
    }
}