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
        Schema::create('our_works', function (Blueprint $table) {
            $table->id();
            $table->string('client_name_ar')->nullable();
            $table->string('client_name_en')->nullable();
            $table->string('description_ar')->nullable();
            $table->string('description_en')->nullable();
            $table->longText('content_ar')->nullable();
            $table->longText('content_en')->nullable();
            $table->date('transaction_start_date')->nullable();
            $table->date('transaction_end_date')->nullable();
            $table->integer('duration_of_work')->nullable();
            // $table->text('tags');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_works');
    }
};