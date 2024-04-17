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
        Schema::table('produtos', function(Blueprint $table){
            // $table->foreignId('category_id')->references('id')->on('categories')->after('nome');
            $table->foreignId('category_id')->references('id')->on('categories')->after(column:'nome');
            // $table->addColumn();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produtos', function($table) {
            $table->dropColumn('category_id');
        });
    }
};
