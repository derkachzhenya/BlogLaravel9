<?php

namespace App\Http\Controllers\Admin\Useradmin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Useradmin;
use App\Http\Requests\StoreUseradminRequest;
use App\Http\Requests\UpdateUseradminRequest;
use Illuminate\Support\Facades\Hash;


class UseradminController extends Controller
{
    
    public function index()
    {
        $useradmins=useradmin::all();
        return view('admin.useradmins.index', compact('useradmins'));
    }

  
    public function create()
    {
        
        return view('admin.useradmins.create');
    }

   
    public function store(StoreUseradminRequest $request)
    {
        $data=$request->validated();
        $data['password'] = Hash::make( $data['password']);
        Useradmin::firstOrCreate(['email'=>$data['email']], $data);
        return redirect()->route('admin.useradmin.index');


    }

   
    public function show(Useradmin $useradmin)
    {
        return view('admin.useradmins.show', compact('useradmin'));
    }

    
    public function edit(Useradmin $useradmin)
    {
        return view('admin.useradmins.edit', compact('useradmin'));
    }

  
    public function update(UpdateUseradminRequest $request, Useradmin $useradmin)
    {
        $data=$request->validated();
        $useradmin->update($data);
        return view('admin.useradmins.show', compact('useradmin'));
    }

  
    public function destroy(Useradmin $useradmin)
    {
        $useradmin->delete();
        return redirect()->route('admin.useradmin.index', compact('useradmin'));
    }
}