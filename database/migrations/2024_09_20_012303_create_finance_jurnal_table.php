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
            $table->unsignedInteger('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('student_id');
            $table->string('reference', 24);
            $table->string('attachment')->nullable();
            $table->boolean('status')->default(false);
            $table->char('uuid', length: 36);
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
