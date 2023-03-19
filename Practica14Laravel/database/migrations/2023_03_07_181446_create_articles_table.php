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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->String('nom',50)->unique();
            $table->text('descripcio');
            $table->float('preu_compra',7,2)->unsigned();
            $table->float('preu_venta',7,2)->unsigned();
            $table->enum('enviament_domicili',['S','N']);
            $table->integer('stock')->unsigned();
            $table->text('observacions')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
