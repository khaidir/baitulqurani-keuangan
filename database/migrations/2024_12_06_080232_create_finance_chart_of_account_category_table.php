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
        Schema::create('finance_chart_of_account_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->nullable();
            $table->string('category', 120)->nullable();
            $table->string('description')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamp('created_at', precision: 0)->useCurrent();
            // $table->timestamp('updated_at', 0)->useCurrentOnUpdate();
            $table->timestamp('updated_at', 0)->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finance_chart_of_account_category');
    }
};
