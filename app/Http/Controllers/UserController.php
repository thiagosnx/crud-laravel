<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Uzer;

class UserController extends Controller{

    public function index(){
        return view('singup'); 
    }

    public function allUsers(){
        $users = Uzer::all();
        return view('all_users', ['users' => $users]);
    }

    public function login(Request $data, $email){
        $user = Uzer::find($email).value;
        $user = Uzer::find($name).value;

        if($user){
            echo "Usuário não cadastrado";
        }else{
            return redirect('/users');
        }

               
    }

    public function getUserById($id){ 
        $users = Uzer::findOrFail($id);
        echo $users->name;
        echo "<br>";
        echo $users->email;
    
    }
    
    public function store(Request $data){
        $user = new Uzer;

        $user->name = $data->name;
        $user->email = $data->email;

        if($data->hasFile('image') && $data->file('image')->isValid()){
             $requestImage = $data->image;

             $extension = $requestImage->extension();

             $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

             $requestImage->move(public_path('img/users'), $imageName);

             $user->image = $imageName;

        }

        $user->save();

        return redirect('/users')->with('msg', 'Usuário cadastrado!');
    
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

        return redirect('/users');
    }

    public function deleteUser($id){
        $users = Uzer::findOrFail($id);
        $users->delete();

        return redirect('/users');
    }

}
