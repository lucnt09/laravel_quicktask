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
            Schema::table('users', function (Blueprint $table) {
                $table->boolean('is_admin')->default(false);
                $table->boolean('is_active')->default(true);
                $table->string('username')->unique()->after('email');
                $table->dropColumn('name');
                $table->string('first_name')->after('id');
                $table->string('last_name')->after('first_name');
            });
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
