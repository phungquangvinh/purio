<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnNameManagerDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('managers_details', function (Blueprint $table) {
            $table->string('member_web', '150')->change();
            $table->renameColumn('city_county','city_country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('managers_details', function (Blueprint $table) {
            $table->string('member_web', '50')->change();
            $table->renameColumn('city_country','city_county');
        });
    }
}
