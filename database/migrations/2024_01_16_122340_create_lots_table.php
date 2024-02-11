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
        Schema::create('lots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blockID');
            $table->integer('lotNo');
            $table->integer('lotExt');
            $table->integer('accNo');
            $table->decimal('area',10,2);
            $table->decimal('totalLandCost',10,2);
            $table->decimal('costPerSqm',10,2);
            $table->decimal('dPaymentRate',10,2);
            $table->unsignedBigInteger('employeeID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lots');
    }
};
