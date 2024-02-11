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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('beneficiaryID');
            $table->unsignedBigInteger('lotID');
            $table->decimal('loanAmount',10,2);
            $table->dateTime('dateGranted');
            $table->dateTime('startDate');
            $table->dateTime('dPaymentDeadline');
            $table->dateTime('maturityDate');
            $table->unsignedBigInteger('amortiFactorID');
            $table->decimal('monthAmort',10,2);
            $table->decimal('interestRate',10,2);
            $table->unsignedBigInteger('employeeID');
            $table->string('loanStat');
            $table->string('loanType');
            $table->decimal('equityRate',10,2);
            $table->decimal('equity',10,2);
            $table->decimal('totalProjCost',10,2);
            $table->decimal('carryOverInterest',10,2);
            $table->decimal('carryOverPenalty',10,2);
            $table->decimal('monthlyPrincipal',10,2);
            $table->decimal('monthlyInterest',10,2);
            $table->decimal('monthlyCoInterest',10,2);
            $table->decimal('monthlyCoPenalty',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
