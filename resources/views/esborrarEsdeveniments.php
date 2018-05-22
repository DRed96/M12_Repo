<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Usuari;
use App\Logs;
use Krucas\Notification\Facades\Notification;
use Illuminate\Support\Facades\DB;
class CU_43Controller extends Controller {
    public function mostraUsuari() {
        $id = filter_input(INPUT_GET, 'id');
        $usuari = DB::select("SELECT * FROM usuaris WHERE idUsuari = " . $id);
        $grups = DB::table('usuarigrup')
                        ->where('idUsuari', $id)
                        ->leftJoin('grups', 'usuarigrup.idGrup', '=', 'grups.idGrup')->get();
        return [$usuari, $grups];
    }
    public function eliminarUsuari(Request $request) {
        $id = $request->cu43_idUsuari;
        $user = Usuari::findOrFail($id);
        $nlog = Logs::where('idLog', $request->cu43_idLog)->first();
        if ($user != null && $nlog == null) {
            if ($esdeveniment != null) {
                
                $esdeveniment->delete();
                Notification::success("L'esdeveniment s'ha eliminat correctament");
                return redirect('Llistar esdeveniments');
            } else {
                Notification::error("L'esdeveniment no s'ha eliminat");
                return redirect('Llistar esdeveniments');
            }
            /* Falta eliminar carpeta o pertinença agrups??   */
        }
    }
}