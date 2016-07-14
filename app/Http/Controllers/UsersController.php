<?php

namespace App\Http\Controllers;

use App\Commands\AddUserCommand;;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Repositories\UsersRepositoryInterface;
use Collective\Bus\Dispatcher;

class UsersController extends Controller
{
    public function __construct(
        Dispatcher $dispatcher,
        UsersRepositoryInterface $users
    )
    {
        $this->dispatcher = $dispatcher;
        $this->users = $users;        
    }

    public function create()
    {
        return view('create');
    }
    
    public function store(UserRequest $request)
    {
        $name = $request->get('name');
        $bday = $request->get('bday');
        $amount = $request->get('amount');

        $user = new AddUserCommand($name, $bday, $amount);
        $this->dispatcher->dispatch($user);
        
        return view('create');
    }
    
    public function index()
    {
        $users = $this->users->all();

        return view('index', ['users' => $users, 'i' => 1]);
    }

    public function search(Request $request)
    {
        $name = $request->get('name');
        if (!empty($name))
        {
            $users = $this->users->searchByName($name);
            return view('index', ['users' => $users, 'i' => 1]);
        }

        $users = $this->users->all();

        return view('index', ['users' => $users, 'i' => 1]);
    }
}