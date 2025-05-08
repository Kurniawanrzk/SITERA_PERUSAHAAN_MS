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
        $table->uuid('id')->primary();
        $table->uuid('user_id');
        $table->string('nama_perusahaan');
        $table->string('jenis_perusahaan');
        $table->text('alamat')->nullable();
        $table->string('jalan_dusun')->nullable();
        $table->string('rt')->nullable();
        $table->string('rw')->nullable();
        $table->string('desa')->nullable();
        $table->string('kecamatan')->nullable();
        $table->string('longitude', 100)->nullable();
        $table->string('latitude', 100)->nullable();
        $table->string('email');
        $table->string('nomor_telepon');
        $table->string('gambar_perusahaan')->nullable();
        $table->timestamps();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
