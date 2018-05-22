<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Usuers;
use App\Logs;
use Krucas\Notification\Facades\Notification;
use Illuminate\Support\Facades\DB;
class CU_43Controller extends Controller {
    public function showUser() {
        $id = filter_input(INPUT_GET, 'id');
        $user = DB::select("SELECT * FROM usuers WHERE idUser = " . $id);
        $groups = DB::table('usergroup')
                        ->where('idUser', $id)
                        ->leftJoin('group', 'usergroup.idGroup', '=', 'groups.idGroup')->get();
        return [$user, $groups];
    }
    public function deleteUser(Request $request) {
        $id = $request->idUsuari;
        $user = Usuari::findOrFail($id);
        $nlog = Logs::where('idLog', $request->cu43_idLog)->first();
        if ($user != null && $nlog == null) {
            if ($esdeveniment != null) {
                
                $esdeveniment->delete();
                Notification::success("The event was successfully deleted");
                return redirect('Events list');
            } else {
                Notification::error("The event has not been deleted");
                return redirect('Events list');
            }
            /* Falta eliminar carpeta o pertinença agrups??   */
        }
    }
}