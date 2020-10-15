<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('inventaris')->unique();
            $table->date('tanggal_terima')->nullable();
            $table->string('judul');
            $table->string('pengarang');
            $table->string('penerbit')->nullable();
            $table->string('tahun_terbit')->nullable();
            $table->string('semester')->nullable();
            $table->string('kelas')->nullable();
            $table->string('asal')->nullable();
            $table->string('harga')->nullable();
            $table->string('isbn')->nullable();
            $table->string('callnumber')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('sampul')->nullable();
            $table->text('deskripsi')->nullable();
            
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
