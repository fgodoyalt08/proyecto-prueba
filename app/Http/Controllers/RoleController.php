<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
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
        $roles = Role::sortable()->search()->paginate(5);

        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'user']);

        return view('roles.create');
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
            'description'=> 'required'
        ]);
        
        $role = new Role([
            'name' => $request->get('name'),
            'description'=> $request->get('description')
        ]);
        
        $role->save();
        
        return redirect('/roles')->with('success', 'Rol agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Role $role)
    {
        $request->user()->authorizeRoles(['admin', 'user']);
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Role $role)
    {
        $request->user()->authorizeRoles(['admin', 'user']);
        return view('roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $request->user()->authorizeRoles(['admin', 'user']);

        $request->validate([
            'name'=>'required',
            'description'=> 'required'
        ]);

        $role = Role::find($role->id);
        $role->name = $request->get('name');
        $role->description = $request->get('description');
        if($request->get('password')) $role->password = Hash::make($request->get('password'));
        $role->save();

        return redirect('/roles')->with('success', 'Rol actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Role $role)
    {
        $request->user()->authorizeRoles(['admin', 'user']);
        $roles = Role::find($role->id);
        $roles->delete();

        return redirect('/roles')->with('success', 'Rol eliminado con éxito');
    }
}
