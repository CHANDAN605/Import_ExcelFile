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
        Schema::create('user_records', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('unit');
            $table->string('net_intrst_amt');
            $table->string('other_income_amt');
            $table->string('div_amt');
            $table->string('net_amt');
            $table->string('distribution');
            $table->string('financial_year');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_records');
    }
};
