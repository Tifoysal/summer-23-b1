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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('status',10)->default('active');
            $table->string('image')->nullable();
            $table->double('price',10,2)->default(0.0);
            $table->integer('quantity')->default(0);
            $table->integer('discount')->nullable();
            $table->string('discount_type')->nullable()->comment('amount or percentage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodcuts');
    }
};
