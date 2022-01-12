<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarsasjateksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarsasjateks', function (Blueprint $table) {
            $table->id();
            $table->string('nev_angol');
            $table->string('nev_magyar');
            $table->string('tipus');
            $table->integer('ar');
            $table->integer('jatekosok_szama');
            $table->integer('jatekido');
            $table->date('vasarlas_ideje');        
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
        Schema::dropIfExists('tarsasjateks');
    }
}
