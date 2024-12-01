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
        Schema::create('master_basic_cost', function (Blueprint $table) {
            $table->unsignedTinyInteger('id', 3);
            $table->unsignedTinyInteger('basic_cost_id');
            $table->string('basic_name', 60);
            $table->double('basic_amount')->default(0);
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
        Schema::dropIfExists('master_basic_cost');
    }
};
