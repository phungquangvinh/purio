<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginManager extends Migration
{
    public function up()
    {
        Schema::create('login_manager_operators', function (Blueprint $table) {
            $table->increments('serial_no');
            $table->integer('manager_id')->unsigned();
            $table->foreign('manager_id')->references('manager_id')->on('managers_detail');
            $table->string('login_id',100)->unique();
            $table->string('login_pw',100);
            $table->string('name',100);
            $table->tinyInteger('del_flg')->default(0);
            $table->index('del_flg');
            $table->string('registered_person',50);
            $table->string('updater',50);
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
        Schema::dropIfExists('login_manager_operators');
    }
}
