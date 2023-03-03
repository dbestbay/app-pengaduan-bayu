<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasyarakatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masyarakats', function (Blueprint $table) {
            $table->integer('nik')->unique();
            $table->primary('nik');
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('email');
            $table->string('password');
            $table->char('telp', 12);
            $table->enum('jenkel',['laki-laki','perempuan']);
            $table->text('alamat');
            $table->char('rt',  4);
            $table->char('rw', 4);
            $table->char('kode_pos', 5);
            $table->char('province_id');
            $table->char('regency_id');
            $table->char('district_id');
            $table->char('village_id');
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
        Schema::dropIfExists('masyarakats');
    }
}
