<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;

class CrearGrup_Controller extends Controller {

    public function getGrup(Request $request) {

       return view('crearGrup');    
}
	
	public function postGrup(){
        
            $nouGrup = new Grup;
            $nouGrup->nomGrup = $request->nomGrup;
			$nouGrup->descripcioGrup = $request->descripcioGrup;
			

            $nouGrup->save();
             Notification::success("Grup creat correctament");
        

}}
?>
