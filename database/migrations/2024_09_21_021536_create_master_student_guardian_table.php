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
        Schema::create('master_student_guardian', function (Blueprint $table) {
            $table->unsignedInteger('id', 6);
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('room_id');
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
        Schema::dropIfExists('master_student_guardian');
    }
};
