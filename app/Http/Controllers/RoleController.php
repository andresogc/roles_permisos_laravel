<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;


class RoleController extends Controller
{
    public function index(){
        $editpermissions = auth()->user()->hasPermissionTo('roles.show');
        $permisos = auth()->user()->permissions;
      //  dd( $editpermissions);
       // dd( $permisos);
        $roles = Role::paginate();

        return view('roles.index', compact('roles'));

    }

    public function create(){
        $permissions = Permission::get();

        return view('roles.create', compact('permissions'));
    }


    public function store(Request $request){

        $role = Role::create($request->all());

        //actualice permisos
        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.edit', $role->id)->with('info', 'Role guardado con exito');

    }


    public function show(role $role){

        return view('roles.show', compact('role'));;

    }

    public function edit(role $role){

        $permissions = Permission::get();

        return view('roles.edit', compact('role','permissions'));;

    }

    public function update(Request $request, role $role){

        //Actuelice el role
        $role->update($request->all());

        //actualice permisos
        $role->permissions()->sync($request->get('permissions'));


        return redirect()->route('roles.edit', $role->id)->with('info', 'Role actualizado con exito');

    }


    public function destroy(role $role){

        $role->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
