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

    public function postRegistrar(){
        $nouUsuari = new Usuari;

        if(false){
            // Omplir dades
            Notification::success("Usuari creat correctament");
        }
        else{
            Notification::error("Error: Dades incorrectes");
        }
        return view('registerForm');
    }
}
