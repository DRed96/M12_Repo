<?php
// Captcha secret key 6LcBUFoUAAAAAH6_imokPfjifJVbNQApERmvEdvo
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Usuari;
use \Crypt;

class UsersController extends Controller
{
    public function getRegistrar(){
        // session_start();
        // if(isset($_SESSION['idUsuari'])){
            // return redirect('/main');
            //Notification::error("You must be logged in to perform this operation");
        // }
        return view('registerForm');
    }

    public function getLogin(){
        return view('login');
    }

    public function postLogin(Request $request){
        $pass = Crypt::decrypt($request->password);
        $tmpUsu = Usuari::where('email',$request->email)->where('password',$pass)->first();
        if(isset($tmpUsu)){
            $_SESSION['idUsuari'] = $tmpUsu->idUsuari;
        }
        return back();
    }

    public function postRegistrar(Request $request){
        $valid = false;
        if(isset($_POST["g-recaptcha-response"])){
            if($request->password == $request->password2){
                if($request->email == $request->email2){
                    $tmpUsu = Usuari::where('email',$request->email)->first();
                    if(isset($tmpUsu)){
                         echo " existeix";
                     }
                    else{
                        echo " no existeix";
                        $valid = true;
                    }
                }
            }
        }
        if($valid){
            $nouUsuari = new Usuari;
            $nouUsuari->nom = $request->name;
            $nouUsuari->cognom = $request->surname;
            $nouUsuari->genere = $request->gender;
            $nouUsuari->email = $request->email;
            $nouUsuari->contrasenya = Crypt::encrypt($request->password);
            $nouUsuari->dataNaix = $request->birthdatePicker;
            // $nouUsuari->descripcio = $request->;
            $nouUsuari->tipus = 'Client';
            $nouUsuari->save();
            // Notification::success("Usuari creat correctament");
            return redirect('/main');
        }
        else{
            //Notification::error("Error: Dades incorrectes");
            return back();
        }
    }
}
