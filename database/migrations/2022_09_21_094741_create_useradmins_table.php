<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUseradminsTable extends Migration
{
  
    public function up()
    {
        Schema::create('useradmins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->timestamp('email_verified_at');
            $table->string('password');
            $table->string('remember_token')->nullable();
            $table->timestamps();

            $table->softDeletes();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('useradmins');
    }
}
