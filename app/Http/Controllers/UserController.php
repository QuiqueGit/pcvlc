<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function checkUser(){ //al enviar el formulario de login

    	$name = $_POST['nombre'];
    	$pass = $_POST['pass'];
    	$flag = false;    	

    	$users = DB::select('SELECT * FROM users WHERE name="'.$name.'" AND password="'.$pass.'"');    

    	if(empty($users)){
    		$flag = false;
    	}else{
    		$flag = true;
    	}	

    	return view('inicio',compact('flag'));
    }

    public function setRegistro(){ //cuando se pulsa sobre ¡Regístrate! en el modal de login
    	
    	return view('registro');    	
    }

    public function crearUser(){ //cuando se pulsa el botón registro

    	DB::insert('INSERT INTO users (name,email,password) VALUES  ("'.$_POST["nombre"].'","'.$_POST["email"].'","'.$_POST["pass"].'")');

    	return view('componentes');
    }
}
