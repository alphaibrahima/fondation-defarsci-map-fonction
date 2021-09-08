<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->integer('probleme_id');
            $table->string('name');
            $table->string('status');
            $table->string('image');
            $table->text('description');
            $table->timestamps();
            
            // $table->enum('status', ['non_resolu', 'en_etude', 'en_cours_de_traitement', 'resolu']);
            // $table->string('name');
            // $table->string('address');
            // $table->string('city');
            // $table->string('state');
            // $table->string('hours');
            // $table->decimal('latitude', 8, 6);
            // $table->decimal('longitude', 9, 6);
            // $table->foreign('probleme_id')->references('id')->on('problemes')
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets');
    }
}
