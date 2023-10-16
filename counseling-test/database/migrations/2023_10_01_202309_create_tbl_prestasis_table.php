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
        Schema::create('tbl_prestasi', function (Blueprint $table) {
            $table->id();
            $table->date('tglPrestasi');
            $table->string('namaPrestasi');
            $table->string('tingkatPrestasi');
            $table->string('peringkatPrestasi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_prestasi');
    }
};
