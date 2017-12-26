<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller_One extends Controller
{
    public function showNovedades(){

    	$novedades = DB::select('SELECT * FROM novedades');

    	return view('inicio')->with('novedades',$novedades);
    }

    public function showProduct($id){

    	return view('producto')->with('id',$id); //Le pasamos la id del producto a la vista, que viene de la ruta producto/id
    }

    public function showComponentes(){

    	$tipos = DB::select('SELECT DISTINCT tipo FROM componentes');

    	$componentes = DB::select('SELECT * FROM componentes');

    	if (isset($_GET['actualizar'])) {

    		if ($_GET["selector"] != "todo") {

    			$componentes = DB::select('SELECT * FROM componentes WHERE tipo="'.$_GET['selector'].'"');

    			return view('componentes',compact('tipos','componentes'));    			
    		}
    		
    	}  			

    	return view('componentes',compact('tipos','componentes'));
    }

}
