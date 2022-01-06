<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKozmeticarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kozmeticars', function (Blueprint $table) {
            $table->id();
            $table->string('ime_prezime');
            $table->string('email');
            $table->string('broj_telefona'); 
            $table->string('nivo_strucne_spreme');
            $table->string('godine_iskustva');



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
        Schema::dropIfExists('kozmeticars');
    }
}
