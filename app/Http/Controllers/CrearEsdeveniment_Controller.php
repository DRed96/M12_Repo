<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;

class CrearEsdeveniment_Controller extends Controller {

    public function getEsdeveniment(Request $request) {

       return view('crearEsdeveniments');    
}
	
	public function postEsdeveniment(){
        
            $nouEsdeveniment = new Esdeveniment;
            $nouEsdeveniment->nomEsdeveniment = $request->nomEsdeveniment;
			$nouEsdeveniment->llocEsdeveniment = $request->llocEsdeveiment;
			$nouEsdeveniment->dataEsdeveniment = $request->dataEsdeveiment;
			$nouEsdeveniment->descripcioEsdeveniment = $request->descripcioEsdeveiment;
			$nouEsdeveniment->etiquetesEsdeveniment = $request->etiquetesEsdeveiment;
			$nouEsdeveniment->participantsEsdeveniment = $request->participacioEsdeveiment;
			$nouEsdeveniment->periodicitatEsdeveniment = $request->periodicitatEsdeveiment;


            $nouEsdeveniment->save();
             Notification::success("Usuari creat correctament");
        

}}
?>
