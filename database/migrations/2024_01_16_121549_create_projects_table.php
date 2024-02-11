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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('projectName',255);
            $table->string('location',120);
            $table->decimal('costPerSqm',10,2);
            $table->decimal('interestRate',10,2);
            $table->integer('numberOfBlocks');
            $table->decimal('downPaymentRate',10,2);
            $table->unsignedBigInteger('employeeID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
