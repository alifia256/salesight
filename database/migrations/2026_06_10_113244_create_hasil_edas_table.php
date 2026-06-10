<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hasil_edas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('shopping_mall');
            $table->integer('periode_year');
            $table->decimal('total_sales', 15, 2)->default(0);
            $table->integer('total_transaction')->default(0);
            $table->integer('total_quantity')->default(0);
            $table->decimal('average_sales', 15, 2)->default(0);
            $table->decimal('pda_sales', 10, 6)->default(0);
            $table->decimal('pda_transaction', 10, 6)->default(0);
            $table->decimal('pda_quantity', 10, 6)->default(0);
            $table->decimal('pda_average_sales', 10, 6)->default(0);
            $table->decimal('nda_sales', 10, 6)->default(0);
            $table->decimal('nda_transaction', 10, 6)->default(0);
            $table->decimal('nda_quantity', 10, 6)->default(0);
            $table->decimal('nda_average_sales', 10, 6)->default(0);
            $table->decimal('sp', 10, 6)->default(0);
            $table->decimal('sn', 10, 6)->default(0);
            $table->decimal('nsp', 10, 6)->default(0);
            $table->decimal('nsn', 10, 6)->default(0);
            $table->decimal('appraisal_score', 10, 6)->default(0);
            $table->integer('ranking_position')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hasil_edas');
    }
};