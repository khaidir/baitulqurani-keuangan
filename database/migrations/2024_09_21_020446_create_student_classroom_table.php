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
        Schema::create('student_classroom', function (Blueprint $table) {
            $table->unsignedTinyInteger('id', 3);
            // $table->string('room', 24);
            // $table->string('location');
            // $table->text('description')->nullable();
            // $table->boolean('status')->default(false);
            $table->timestamp('created_at', precision: 0)->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_classroom');
    }
};
