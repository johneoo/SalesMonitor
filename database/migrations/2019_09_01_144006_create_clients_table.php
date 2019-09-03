<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('full_name', 100);
            $table->string('address', 100)->nullable();
            $table->string('business_name', 100)->nullable();
            $table->string('owners_name', 100)->nullable();
            $table->string('phone_number', 100)->nullable();
            $table->dateTime('dob')->nullable();
            $table->string('marital_status', 10)->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('state_of_origin', 50)->nullable();
            $table->string('network_provider', 10)->nullable();
            $table->string('phone_os', 10)->nullable();
            $table->string('referer_channel', 50)->nullable();
            $table->string('referer', 50)->nullable();
            $table->mediumText('handler_remarks')->nullable();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
