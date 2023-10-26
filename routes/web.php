<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Uzer;

Route::get('/', function () {
    return view('welcome'); //retorna o arquivo view welcome.blade.php
    //@requestmapping?
});


Route::post('/register', function (Request $data) { //criando o mapping com o metodo request do http
    //a rota /register é usada so para o funcionamento do metodo, não é possivel acessar pela url
    Uzer::create([ //criando um usuario a partir do meu model Uzer
        'name'=>$data->name,
        'email'=>$data->email
    ]);
    echo "Usuário cadastrado!";
    header('Location: /users');

});

Route::get('/users', function(){ //getallusers
    $allusers = Uzer::all();
    echo $allusers;
});

Route::get('/users/{id}', function ($id){ //getusersbyid
    $usuario = Uzer::findOrFail($id);
    echo $usuario->name;
    echo "<br>";
    echo $usuario->email;

});

Route::get('/update/{id}', function ($id){//rota de get so para retornar um html pra editar o usuario
    $usuario = Uzer::findOrFail($id);
    return view('update_user', ['usuario' => $usuario]);
});

Route::put('/updateuser/{id}' , function (Request $data, $id){//recebendo dados do request e o id do usuario
    $usuario = Uzer::findOrFail($id);
    $usuario->name = $data->name;
    $usuario->email = $data->email;
    $usuario->save();
    echo "Chama!";
}); 

Route::get('/delete{id}', function ($id){ //getuserbyid e ja deleta auto qnd coloca a url
    $usuario = Uzer::findOrFail($id);
    $usuario->delete();
    echo "Excluido!";
    //fazer metodo para delete com click
});



