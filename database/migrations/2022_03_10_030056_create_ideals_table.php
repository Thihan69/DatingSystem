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
        Schema::create('ideals', function (Blueprint $table) {
            $table->increments('ideal_id');
            $table->Integer('member_one_id')->unsigned();
            $table->Integer('member_two_id')->unsigned();
            $table->Integer('status');
            $table->timestamps();
            $table->foreign('member_one_id')->references('member_id')->on('members')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('member_two_id')->references('member_id')->on('members')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ideals');
    }
};
