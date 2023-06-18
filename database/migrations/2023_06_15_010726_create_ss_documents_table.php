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
        Schema::create('ss_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->integer('nullCount');
            $table->string('DAS')->nullable();
            $table->string('eCar')->nullable();
            $table->string('dupTitle')->nullable();
            $table->string('RTax')->nullable();
            $table->string('TaxDec')->nullable();
            $table->string('TaxReceipt')->nullable();
            $table->string('DAR')->nullable();
            $table->string('SPA')->nullable();
            $table->string('sepia')->nullable();
            $table->string('bPrint')->nullable();
            $table->string('techDesc')->nullable();
            $table->string('writtenReq')->nullable();
            $table->string('cadCost')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ss_documents');
    }
};
