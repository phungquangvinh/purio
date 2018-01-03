<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagerInfoTable extends Migration
{
    public function up()
    {
        Schema::create('managers_detail', function (Blueprint $table) {
            $table->increments('manager_id');
            $table->string('name',200);
            $table->string('prefectures',10);
            $table->string('city_county',300);
            $table->string('building_name',300);
            $table->string('tel_no',15);
            $table->string('mail_address',100);
            $table->tinyInteger('del_flg')->default(0);
            $table->index('del_flg');
            $table->string('member_ip',20);
            $table->string('member_web',50);
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
        Schema::dropIfExists('managers_detail');
    }
}
