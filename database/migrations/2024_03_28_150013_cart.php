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
        if(!Schema::hasTable('cart'))
        {
        Schema::create('cart', function (Blueprint $table) {
            // $table->string('u_id')->primary();
            $table->id('c_id'); 
            $table->unsignedBigInteger('p_id'); 
         $table->foreign('p_id')->references('p_id')->on('products');
         $table->unsignedBigInteger('u_id'); 
         $table->foreign('u_id')->references('u_id')->on('users');
         $table->integer('qty');  
            
            
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
        Schema::dropIfExists('cart');
       
    }
};
