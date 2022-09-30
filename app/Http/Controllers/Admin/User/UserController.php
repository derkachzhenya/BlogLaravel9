<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\AdminMiddleware;


class UserController extends Controller
{
    
    public function index()
    {
        $users=User::all();
        return view('admin.user.index', compact('users'));
    }

  
    public function create()
    {
        $roles=User::getRoles();
        return view('admin.user.create', compact('roles'));
    }

   
    public function store(StoreUserRequest $request)
    {
        $data=$request->validated();
        $data['password'] = Hash::make( $data['password']);
        User::firstOrCreate(['email'=>$data['email']], $data);
        return redirect()->route('admin.user.index');


    }

   
    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    
    public function edit(User $user)
    {
        
        $roles=User::getRoles();
        return view('admin.user.edit', compact('user', 'roles'));
    }

  
    public function update(UpdateUserRequest $request, User $user)
    {
        $data=$request->validated();
        $user->update($data);
        return view('admin.user.show', compact('user'));
    }

  
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index', compact('user'));
    }
}