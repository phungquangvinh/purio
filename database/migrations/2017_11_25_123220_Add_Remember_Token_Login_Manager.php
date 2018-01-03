<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRememberTokenLoginManager extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('login_admin_operators', function (Blueprint $table) {
            $table->rememberToken();
        });

        Schema::table('login_manager_operators', function (Blueprint $table) {
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('login_admin_operators', function (Blueprint $table) {
            $table->drop('remember_token ');
        });

        Schema::table('login_manager_operators', function (Blueprint $table) {
            $table->drop('remember_token ');
        });
    }
}
