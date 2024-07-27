<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permits', function (Blueprint $table) {
            $table->id();
            $table->string('profile_pic')->nullable();
            $table->string('username')->nullable();
            $table->string('nama')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('tel')->nullable();
            $table->string('license_number')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('identification')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->text('address1')->nullable();
            $table->text('address2')->nullable();
            $table->text('address3')->nullable();
            $table->string('wilayah')->nullable();
            $table->string('negeri')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('pemeriksa_status')->default(0);
            $table->tinyInteger('penyokong_status')->default(0);
            $table->tinyInteger('pelulus_status')->default(0);
            $table->text('pemeriksa_comment')->nullable();
            $table->text('penyokong_comment')->nullable();
            $table->text('pelulus_comment')->nullable();
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
        Schema::dropIfExists('permits');
    }
};
