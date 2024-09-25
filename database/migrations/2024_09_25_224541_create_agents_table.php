<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('numero')->nullable();
            $table->string('nom');
            $table->string('sexe');
            $table->date('date');
            $table->string('lieu_naissance');
            $table->string('email');
            $table->string('phone');
            $table->string('etat_civil');
            $table->string('academique');
            $table->string('niveau');
            $table->string('numerocitoyannete');
            $table->string('certificat');
            $table->string('nationalite');
            $table->string('ville');
            $table->string('commune');
            $table->string('adresse');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
