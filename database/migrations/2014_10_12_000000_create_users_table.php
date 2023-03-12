<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('pseudo')->nullable();
            $table->date('date_naissance');
            $table->string('adresse');
            $table->string('email')->unique();
            $table->biginteger('telephone')->unique();
            $table->string('ville')->nullable();
            $table->string('pays')->nullable();
            $table->string('domaine')->nullable();
            $table->json('role');
            $table->string('activite')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
}
