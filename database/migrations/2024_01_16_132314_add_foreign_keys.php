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
        Schema::table('amortization_factors', function (Blueprint $table) {
            $table->foreign('employeeID')->references('id')->on('employees');
        });

        Schema::table('blocks', function (Blueprint $table) {
            $table->foreign('employeeID')->references('id')->on('employees');
            $table->foreign('projectID')->references('id')->on('projects');
        });

        Schema::table('clients', function (Blueprint $table) {
            $table->foreign('employeeID')->references('id')->on('employees');
        });

        Schema::table('family_members', function (Blueprint $table) {
            $table->foreign('beneficiaryID')->references('id')->on('clients');
        });

        Schema::table('given_prev_clients', function (Blueprint $table) {
            $table->foreign('prevClientID')->references('id')->on('clients');
        });

        Schema::table('given_prev_loans', function (Blueprint $table) {
            $table->foreign('prevLoanID')->references('id')->on('loans');
        });

        Schema::table('loans', function (Blueprint $table) {
            $table->foreign('employeeID')->references('id')->on('employees');
            $table->foreign('beneficiaryID')->references('id')->on('clients');
            $table->foreign('amortiFactorID')->references('id')->on('amortization_factors');
            $table->foreign('lotID')->references('id')->on('lots');
        });


        Schema::table('loan_fees', function (Blueprint $table) {
            $table->foreign('loanID')->references('id')->on('loans');
            $table->foreign('feeID')->references('id')->on('fees');
            $table->foreign('orNo')->references('id')->on('payments');
        });

        Schema::table('lots', function (Blueprint $table) {
            $table->foreign('employeeID')->references('id')->on('employees');
            $table->foreign('blockID')->references('id')->on('blocks');
        });

        Schema::table('payments', function (Blueprint $table) {
            $table->foreign('employeeID')->references('id')->on('employees');
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->foreign('employeeID')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('amortization_factors', function (Blueprint $table) {
            $table->dropForeign(['employeeID']);
        });

        Schema::table('blocks', function (Blueprint $table) {
            $table->dropForeign(['employeeID']);
            $table->dropForeign(['projectID']);
        });

        Schema::table('clients', function (Blueprint $table) {
            $table->dropForeign(['employeeID']);
        });

        Schema::table('family_members', function (Blueprint $table) {
            $table->dropForeign(['beneficiaryID']);
        });

        Schema::table('given_prev_clients', function (Blueprint $table) {
            $table->dropForeign(['prevClientID']);
        });

        Schema::table('given_prev_loans', function (Blueprint $table) {
            $table->dropForeign(['prevLoanID']);
        });

        Schema::table('loans', function (Blueprint $table) {
            $table->dropForeign(['employeeID']);
            $table->dropForeign(['beneficiaryID']);
            $table->dropForeign(['amortiFactorID']);
            $table->dropForeign(['lotID']);
        });

        Schema::table('loan_fees', function (Blueprint $table) {
            $table->dropForeign(['loanID']);
            $table->dropForeign(['feeID']);
            $table->dropForeign(['orNo']);
        });

        Schema::table('lots', function (Blueprint $table) {
            $table->dropForeign(['employeeID']);
            $table->dropForeign(['blockID']);
        });

        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign(['employeeID']);
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign(['employeeID']);
        });
    }
};
