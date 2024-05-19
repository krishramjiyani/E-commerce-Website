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
        Schema::create('payment', function (Blueprint $table) {
            // $table->string('u_id')->primary();
            $table->id('tran_id'); 
            
         $table->unsignedBigInteger('u_id'); 
         $table->foreign('u_id')->references('u_id')->on('users');
            $table->integer('ammount');
            $table->date('date');
            $table->string('mode')->default('cod');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
        Schema::dropIfExists('payment');
       
    }
};
