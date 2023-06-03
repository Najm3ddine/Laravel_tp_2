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
    Schema::create('etudiants', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nom', 100);
        $table->string('adress', 100);
        $table->string('phone', 20);
        $table->string('email', 45);
        $table->date('date_de_naissance');
        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
