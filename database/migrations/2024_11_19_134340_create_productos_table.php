<?php

use App\Models\Categoria;
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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('product', 50)->unique();
            $table->float('price');
            $table->integer('stock');
            $table->foreignId('id_categoria')->constrained('categorias')->onDelete('cascade')->onUpdate('cascade');
            //$table->integer('id_categoria')->primary();
            $table->foreignId('id_proveedor')->constrained('proveedors')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
