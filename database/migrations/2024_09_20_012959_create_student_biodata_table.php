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
        Schema::create('student_biodata', function (Blueprint $table) {
            $table->unsignedInteger('id', 6);
            $table->unsignedInteger('student_id');
            $table->string('birth_place', 40)->nullable();
            $table->date('birth_date')->nullable();
            $table->enum('gender', ['man', 'woman']);
            $table->timestamp('created_at', precision: 0)->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_biodata');
    }
};
