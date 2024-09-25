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
        Schema::create('affectations', function (Blueprint $table) {
            $table->id();
            $table->string('affectation')->nullable();
            $table->date('date');
            $table->string('description');
            $table->unsignedBigInteger('agent_id');
            $table->unsignedBigInteger('categorie_id');
            $table->unsignedBigInteger('adresse_id');
            $table->unsignedBigInteger('fonction_id');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('remuneration_id');
            $table->unsignedBigInteger('structure_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('adresse_id')->references('id')->on('adresses')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('agent_id')->references('id')->on('agents')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('remuneration_id')->references('id')->on('remunerations')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('structure_id')->references('id')->on('structures')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affectations');
    }
};
