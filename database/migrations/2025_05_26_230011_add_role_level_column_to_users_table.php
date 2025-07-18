<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('role_level')->default(4)->after('remember_token');
            $table->boolean('is_user_verified')->default(false)->after('role_level');
            $table->string('avatar')->default('default.png')->after('is_user_verified');

            $table->foreign('role_level')->on('roles')->references('level');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
