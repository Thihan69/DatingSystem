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
        Schema::create('payments', function (Blueprint $table) {
            $table->Increments('payment_id');
            $table->Integer('member')->unsigned();
            $table->Integer('package')->nullable()->unsigned();
            $table->String('bank_account_name');
            $table->String('bank_name');
            $table->String('registration_fee_slip');
            $table->Date('payment_date');
            $table->Integer('status');
            $table->timestamps();
            $table->foreign('member')->references('member_id')->on('members')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('package')->references('package_id')->on('packages')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
