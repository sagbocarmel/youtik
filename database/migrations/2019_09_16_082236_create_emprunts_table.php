<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpruntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprunts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('projet');
            $table->integer('montant_emprunt');
            $table->integer('duree_remboursement');
            $table->string('email')->nullable();
            $table->string('situation_familiale')->nullable();
            $table->string('marie')->nullable();
            $table->string('jugement')->nullable();
            $table->integer('nbre_enfants')->nullable();
            $table->string('logement')->nullable();
            $table->string('mois_logement')->nullable();
            $table->string('annee_logement')->nullable();
            $table->string('secteur_activite')->nullable();
            $table->string('professsion')->nullable();
            $table->string('type_contrat')->nullable();
            $table->integer('duree_mois')->nullable();
            $table->integer('duree_annee')->nullable();
            $table->string('liquidation')->nullable();
            $table->integer('revenus_mensuel')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('ville_naissance')->nullable();
            $table->string('telephone')->nullable();
            $table->string('pays_residence')->nullable();
            $table->string('ville_residence')->nullable();
            $table->integer('code_postal')->nullable();
            $table->string('adresse')->nullable();
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
        Schema::dropIfExists('emprunts');
    }
}
