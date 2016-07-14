<?php

namespace App\Repositories;

interface UsersRepositoryInterface
{
    public function store($user);
    
    public function all();
    
    public function searchByName($name);
}