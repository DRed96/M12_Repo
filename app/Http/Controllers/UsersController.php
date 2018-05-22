<?php
// Captcha secret key 6LcBUFoUAAAAAH6_imokPfjifJVbNQApERmvEdvo
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;

class UsersController extends Controller
{
    public function getRegistrar(){
        return view('registerForm');
    }

    public function postRegistrar(Request $request){
        $valid = false;
        if($request->password == $request->password2){
            if($request->email == $request->email2){
                $valid = true;
            }
        }
        
        if($valid){
            $nouUsuari = new Usuari;
            $nouUsuari->nick = $request->name;
            $nouUsuari->contrasenya = $request->surname;
            $nouUsuari->genere = $request->gender;
            $nouUsuari->email = $request->email;
            $nouUsuari->contrasenya = $request->password;
            $nouUsuari->dataNaix = $request->birthdatePicker;
			$nouUsuari->descripcio = $request->;
            $nouUsuari->tipus = $request->'Client';
            $nouUsuari->save();
            Notification::success("Usuari creat correctament");
        }
        else{
            Notification::error("Error: Dades incorrectes");
        }
        echo "Registrar Usuari"
        // return view('registerForm');
    }
}
