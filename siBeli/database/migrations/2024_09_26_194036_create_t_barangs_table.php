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
        Schema::create('t_barangs', function (Blueprint $table) {
            $table->id(); 
            $table->string('kode_barang', 20)->unique(); 
            $table->string('nama_barang', 100);  
            $table->string('satuan', 10);  
            $table->decimal('harga_jual', 15, 2);  
            $table->decimal('harga_beli', 15, 2);  
            $table->integer('stok');  
            $table->enum('status', ['delivery', 'arrived']);  
            $table->timestamps();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_barangs');
    }
};
