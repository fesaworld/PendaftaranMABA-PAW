<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);    
            $table->string('nisn', 45);    
            $table->string('tempat_lahir', 45);    
            $table->date('tanggal_lahir');  
            $table->string('no_telp', 45);    
            $table->longText('alamat');     
            $table->string('un_average', 45);    
            $table->string('no_ijazah', 45);    
            $table->text('foto')->nullable();
            $table->text('berkas')->nullable();
            $table->string('status', 20)->nullable();
            $table->text('total_pembayaran', 10)->nullable();
            $table->string('no_test', 10)->nullable();
            $table->string('lokasi', 30)->nullable();
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned();   
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodatas');
    }
}
