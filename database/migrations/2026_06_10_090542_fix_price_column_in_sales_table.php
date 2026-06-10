<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('sales', function (Blueprint $table) {
            $table->decimal('price', 15, 2)->change();
            $table->decimal('total_sales', 15, 2)->change();
            $table->integer('quantity')->change();
            $table->integer('age')->change();
        });
    }

    public function down(): void
    {
        Schema::table('sales', function (Blueprint $table) {
            $table->decimal('price', 8, 2)->change();
            $table->decimal('total_sales', 8, 2)->change();
        });
    }
};