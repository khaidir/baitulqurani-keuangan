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
        Schema::create('finance_jurnal', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('student_id')->nullable();
            $table->string('reference', 24);
            $table->string('attachment')->nullable();
            $table->boolean('status')->default(false);
            $table->uuid('uuid');
            $table->timestamp('created_at', precision: 0)->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finance_jurnal');
    }
};
