<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('member_id');
            $table->string('full_name',50);
            $table->tinyInteger('sex')->default(0);
            $table->string('mail_address',150);
            $table->string('prefectures',10);
            $table->string('street_address',300);
            $table->string('building_etc',300);
            $table->string('input_ip_address',20);
            $table->string('input_browser',255);
            $table->string('tel_no',50);
            $table->tinyInteger('active')->default(1);
            $table->tinyInteger('del_flg')->default(0);
            $table->string('registered_person',50);
            $table->string('updater',50);
            $table->string('login_id',50);
            $table->string('login_pass',255);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
