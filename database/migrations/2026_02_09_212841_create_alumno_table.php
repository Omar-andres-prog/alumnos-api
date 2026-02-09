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
    Schema::create('alumno', function (Blueprint $table) {
        $table->id(); // id autoincremental
        $table->string('nombre', 32); // varchar 32 not null
        $table->string('telefono', 16)->nullable(); // varchar 16 nullable
        $table->integer('edad')->nullable(); // int nullable
        $table->string('password', 64); // varchar 64 not null
        $table->string('email', 64)->unique(); // varchar 64 unique
        $table->string('sexo'); // varchar
        $table->timestamps(); // created_at y updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumno');
    }
};
