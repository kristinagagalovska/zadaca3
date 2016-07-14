<?php

namespace App\Handlers\Commands;

use App\Commands\AddUserCommand;
use App\Repositories\UsersRepositoryInterface;
use App\User;

class AddUserCommandHandler
{
    public function __construct(UsersRepositoryInterface $users)
    {
        $this->users = $users;
    }

    public function handle(AddUserCommand $command)
    {
        $user = new User();
        $user->setName($command->getName());
        $user->setBday($command->getBday());
        $user->setAmount($command->getAmount());

        $this->users->store($user);
    }
}
