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
        Schema::create('finance_chart_of_account', function (Blueprint $table) {
            $table->unsignedInteger('id', 5);
            $table->string('coa_name', 50);
            $table->integer('coa_id');
            $table->enum('position', ['debit', 'credit']);
            $table->string('description')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamp('created_at', precision: 0)->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finance_chart_of_account');
    }
};
