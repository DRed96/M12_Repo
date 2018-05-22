<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{
    public $timestamps = false;
    protected $table = 'usuaris';
    protected $primaryKey = 'idUsuari';
}
