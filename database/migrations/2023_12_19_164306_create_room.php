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
        Schema::create('room', function (Blueprint $table) {
            $table->id();
            $table->string('code_QR')->nullable();
            $table->string('no_kamar')->nullable();
            $table->string('kapasitas')->nullable();
            $table->string('category_pinjam')->nullable();
            $table->string('nama_kamar')->nullable();
            $table->string('harga')->nullable();
            $table->string('category');
            $table->string('peta')->nullable();
            $table->string('desc')->nullable();
            $table->enum('status',[1,2])->default(1)->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('guest_id')->nullable();
            $table
                ->foreign('guest_id')
                ->references('id')
                ->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room');
    }
};
