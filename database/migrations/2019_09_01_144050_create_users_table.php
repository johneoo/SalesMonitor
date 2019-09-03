<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('level_id');
            $table->string('first_name', 20);
            $table->string('last_name', 20);
            $table->string('email', 100)->unique();
            $table->string('profile_photo')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->engine = 'InnoDB';

            $table->foreign('team_id')->references('id')->on('teams')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('level_id')->references('id')->on('levels')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
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
        Schema::dropIfExists('users');
    }
}
