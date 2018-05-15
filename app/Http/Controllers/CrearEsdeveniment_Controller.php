<?php
namespace App\Http\Controllers;

class CrearEsdeveniment_Controller extends Controller {

    public function crearEsdeveniment(Request $request) {

            $esdeveniment = new Esdeveniment;
            $esdeveniment->nom = $request->nomEsdeveniment;
            $esdeveniment->lloc = $request->llocEsdeveniment;
            $esdeveniment->data = $request->dataEsdeveniment;
            $esdeveniment->descripcio = $request->descripcioEsdeveniment;
            $esdeveniment->etiquetes = $request->etiquetesEsdeveniment;
            $esdeveniment->participants = $request->participantsEsdeveniment;
            $esdeveniment->periodicitat = $request->perioicitatEsdeveniment;
            $esdeveniment->save();
}
}
?>