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
        Schema::create('members', function (Blueprint $table) {
            $table->increments('member_id');
            $table->Integer('package')->unsigned()->nullable();
            $table->Integer('user_registration')->unsigned();
            $table->Integer('occupation')->unsigned();
            $table->String('request_occupation',50);
            $table->Integer('ideal_count');
            $table->Integer('status');
            $table->timestamps();
            $table->foreign('package')->references('package_id')->on('packages');
            $table->foreign('user_registration')->references('user_registration_id')->on('users');
            $table->foreign('occupation')->references('occupation_id')->on('occupations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
};
