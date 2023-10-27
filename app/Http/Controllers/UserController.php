<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Uzer;

class UserController extends Controller
{
    public function index(){
        return view('welcome'); //retorna o arquivo view welcome.blade.php
        //@requestmapping?
    }

    public function allUsers(){
        $users = Uzer::all();
        return view('all_users', ['users' => $users]);
    }

    public function getUserById($id){ //pathvariable
        $users = Uzer::findOrFail($id);
        echo $users->name;
        echo "<br>";
        echo $users->email;
    
    }
    
    public function createUser(Request $data){
        Uzer::create([
            'name'=>$data->name,
            'email'=>$data->email
        ]);
        echo "Usuário cadastrado!";
    
    }

    public function updateUsers($id){
        $users = Uzer::findOrFail($id);
        return view('update_user', ['users' => $users]);
    }

    public function updateUsersMethod(Request $data, $id){
        $usuario = Uzer::findOrFail($id);
        $usuario->name = $data->name;
        $usuario->email = $data->email;
        $usuario->save();
        echo('lego');
    }

    public function deleteUser($id){
        $users = Uzer::findOrFail($id);
        $users->delete();
        echo "Lego!";
    }

}
