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
        Schema::create('finance_jurnal_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('jurnal_id');
            $table->unsignedInteger('coa_id');
            $table->double('amount')->default(0);
            $table->string('description')->nullable();
            $table->timestamp('created_at', precision: 0)->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate();
            $table->foreign('jurnal_id')->references('id')->on('finance_jurnal')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finance_jurnal_detail');
    }
};
