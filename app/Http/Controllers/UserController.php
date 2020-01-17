<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Caffeinated\Shinobi\Models\Role;

class UserController extends Controller
{
    public function index(){
        $users = user::paginate();

        return view('users.index', compact('users'));

    }


    public function show(user $user){

        return view('users.show', compact('user'));;

    }

    public function edit(user $user){

        $roles = Role::get();

        return view('users.edit', compact('user','roles'));;

    }

    public function update(Request $request, user $user){

        //Actuelice el usuario
        $user->update($request->all());

        //actualice los roles
        $user->roles()->sync($request->get('roles'));


        return redirect()->route('users.edit', $user->id)->with('info', 'usuario actualizado con exito');

    }


    public function destroy(user $user){

        $user->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
