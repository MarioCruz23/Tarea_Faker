<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Usercontroller extends Controller
{
    public function listar(){
        $data['users']= \App\Models\User::paginate(3);
        return view('Usuarios.listar', $data);
    }
}
