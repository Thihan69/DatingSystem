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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_registration_id');
            $table->String('user_name',30);
            $table->String('user_photo',30);
            $table->String('user_email')->unique();
            $table->String('user_password',30);
            $table->String('facebook_link',200);
            $table->date('date_of_birth');
            $table->String('gender',30);
            $table->String('marital_status',30);
            $table->String('user_phone_no',30);
            $table->String('education');
            $table->String('occupation');
            $table->String('income');
            $table->String('nrc_no',30);
            $table->String('day_born',30);
            $table->String('living_town',30);
            $table->String('bank_account_name',30);
            $table->String('bank_name',30);
            $table->String('registration_fee_slip');
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
        Schema::dropIfExists('users');
    }
};
