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
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            //columns rfor title
            $table->string('title');
            //columns for proposal presentation file
            $table->string('presentation_file')->nullable();
            //columns fo proposal document file
            $table->string('document_file')->nullable();
            //column for status enums: draft, submitted, approved, rejected
            $table->enum('status', ['draft', 'submitted', 'approved', 'rejected'])->default('draft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposals');
    }
};
