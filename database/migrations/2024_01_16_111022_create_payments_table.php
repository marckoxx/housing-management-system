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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('payee',50);
            $table->string('orStatus',50);
            $table->integer('orBatchNo');
            $table->integer('checkNo');
            $table->string('checkBankName',50);
            $table->decimal('amount',10,2);
            $table->unsignedBigInteger('employeeID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
