<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('no_ppdb', 15)->unique();
            $table->string('nama');
            $table->string('asal_sekolah');
            $table->enum('jurusan1', ['Broadcast', 'Multimedia', 'Rekayasa Perangkat Lunak', 'Teknik Komputer dan jaringan', 'Teknik Elektronika Industri']);
            $table->enum('jurusan2', ['Broadcast', 'Multimedia', 'Rekayasa Perangkat Lunak', 'Teknik Komputer dan jaringan', 'Teknik Elektronika Industri']);
            $table->text('alamat');
            $table->string('no_hp')->unique();
            $table->string('email')->unique();
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
        Schema::dropIfExists('students');
    }
}
