<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuaris', function (Blueprint $table) {
            $table->increments('idUsusari');
            $table->string('nick',15)->unique();
            $table->string('email')->unique();
            $table->string('contrasenya');
            $table->tinyInteger('genere');
            $table->date('dataNaix');
            $table->string('descripcio',240);
            $table->enum('tipus',array('admin','client'));
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
