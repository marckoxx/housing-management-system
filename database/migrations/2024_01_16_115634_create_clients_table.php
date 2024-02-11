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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('lastName',50);
            $table->string('firstName',50);
            $table->string('midName',50);
            $table->string('extension',50);
            $table->string('spouseLName',50);
            $table->string('spouseFName',50);
            $table->string('spouseMName',50);
            $table->string('spouseExtension',50);
            $table->unsignedBigInteger('employeeID');
            $table->integer('noOfHousehold');
            $table->string('beneficiaryStatus',50);
            $table->integer('controlNo');
            $table->string('location',120);
            $table->string('barangay',50);
            $table->string('contactNo',11);
            $table->string('remarks',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
