<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_anggota')->unique();
            $table->string('nama');
            $table->string('nomor_identitas')->unique();
            $table->enum('jabatan',['Guru','Siswa']);
            $table->string('jurusan_gurumapel');
            $table->string('kelas');
            $table->enum('jenis_kelamin',['Laki-laki','Perempuan']);
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->text('alamat')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
