<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationL1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation_l1s', function (Blueprint $table) {
            $table->id();
            $table->string('etudiant_id');
            $table->string('matricule');
            $table->integer('matiere_id');
            $table->string('nomMatiere');
            $table->unsignedInteger('annee');
            $table->unsignedInteger('numSemestre');
            $table->string('nomClasse');
            $table->decimal('note1')->nullable();
            $table->decimal('note2')->nullable();
            $table->decimal('note3')->nullable();
            $table->decimal('moyenne')->nullable();
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
        Schema::dropIfExists('evaluation_l1s');
    }
}
