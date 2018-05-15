<?php

namespace App\Http\Controllers;


class EsborrarEsdeveniment_Controller extends Controller {

    public function getEliminarEsdeveniment($id) {
        $esdeveniment = Esdeveniment::findOrFail($id);
        $esdeveniment->delete();
        Notification::success("L'esdeveniment s'ha eliminat correctament.");

        return redirect('/GestionarEsdeveniments');
    }

}
