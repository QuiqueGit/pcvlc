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

    	$title = "Producto";

    	return view('seccion.producto',compact('id','title')); //Le pasamos la id del producto a la vista, que viene de la ruta producto/id
    }    

    public function showData($tabla){

    	$tipos = DB::select('SELECT DISTINCT tipo FROM '.$tabla.'');

    	$data = DB::select('SELECT * FROM '.$tabla.'');

    	$title = $tabla;

    	if (isset($_GET['actualizar'])) {

    		if ($_GET["selector"] != "todo") {

    			$data = DB::select('SELECT * FROM '.$tabla.' WHERE tipo="'.$_GET['selector'].'"');

    			return view('seccion.datosTabla',compact('tipos','data','title'));    			
    		}
    		
    	}  			

    	return view('seccion.datosTabla',compact('tipos','data','title'));
    }

}
