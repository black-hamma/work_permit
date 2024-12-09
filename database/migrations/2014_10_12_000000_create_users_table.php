<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('company');
            $table->string('phone');
            $table->boolean('is_admin')->default(false); // Default to 0 (false)
            $table->boolean('status')->default(true);   // Default to 1 (true)
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        // Create the default admin user
        DB::table('users')->insert([
            'first_name' => 'Super',
            'last_name' => 'Administrator',
            'username' => 'Admin',
            'email' => 'admin@workpermit.com',
            'company' => 'MPS',
            'phone' => '0207603317',
            'is_admin' => true,
            // 'status' => true,
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Jacob',
            'last_name' => 'Wobill',
            'username' => 'jwobill',
            'email' => 'jwobill@mps-gh.com',
            'company' => 'MPS',
            'phone' => '0207603317',
            'is_admin' => false,
            // 'status' => true,
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
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
