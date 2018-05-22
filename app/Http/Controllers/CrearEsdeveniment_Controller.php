<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;

class CrearEsdeveniment_Controller extends Controller {

    public function getEsdeveniment(Request $request) {

       return view('crearEsdeveniments');    
}
	
	public function postRegistrar(){
        $nouEsdeveniment = new Esdeveniment;

        if(false){
            
            Notification::success("Esdeveniment creat correctament");
        }
        else{
            Notification::error("Error: Dades incorrectes");
        }
        return view('Llistat esdeveniments');
    }
}
?>
