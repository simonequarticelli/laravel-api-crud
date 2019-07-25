<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->string('api_token', 80)->after('password')
                      ->unique()
                      ->nullable()
                      ->default(null);
        });
    }

    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
