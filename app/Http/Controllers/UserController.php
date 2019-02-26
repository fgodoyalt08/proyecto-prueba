<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Hash;

class UserController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'user']);
        $users = User::sortable()->search()->paginate(5);

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'user']);
        $roles = Role::all();

        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'user']);
        
        $request->validate([
            'name'=>'required',
            'email'=> 'required',
            'password' => 'required'
        ]);
        
        $user = new User([
            'name' => $request->get('name'),
            'email'=> $request->get('email'),
            'password'=> Hash::make($request->get('password'))
        ]);
        
        $user->save();
        foreach($request->get('rol') as $rol){
            $role_user  = Role::where('name', $rol)->first();
            $user->roles()->attach($role_user);
        }
        
        return redirect('/users')->with('success', 'Usuario agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user)
    {
        $request->user()->authorizeRoles(['admin', 'user']);
        $roles = Role::all();
        return view('users.show', compact('user', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, User $user)
    {
        //var_dump($user);die();
        $request->user()->authorizeRoles(['admin', 'user']);
        $roles = Role::all();

        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->user()->authorizeRoles(['admin', 'user']);
        
        $request->validate([
            'name'=>'required',
            'email'=> 'required'
        ]);

        $user = User::find($user->id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        if($request->get('password')) $user->password = Hash::make($request->get('password'));
        $user->save();

        return redirect('/users')->with('success', 'Usuario actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, User $user)
    {
        $request->user()->authorizeRoles(['admin', 'user']);
        
        $user = User::find($user->id);
        $user->delete();

        return redirect('/users')->with('success', 'Usuario eliminado con éxito');
    }
}
