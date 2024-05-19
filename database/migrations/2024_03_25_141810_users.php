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
        Schema::create('users', function (Blueprint $table) {
            // $table->string('u_id')->primary();
            $table->id('u_id'); 
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('mo_no');
            $table->string('city');
            $table->string('state');
            $table->string('pincode');
            $table->string('gender');
            $table->string('isActive')->default('1');
            $table->string('address');
            $table->string('type')->default('user');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
