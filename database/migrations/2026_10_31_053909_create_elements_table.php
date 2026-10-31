<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('elements', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('characters', function (Blueprint $table) {
            $table->dropColumn('element');
        });

        Schema::table('characters', function (Blueprint $table) {
            $table->foreignId('element_id')->constrained();
        });
    }

    public function down(): void
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->dropForeign(['element_id']);
            $table->dropColumn('element_id');
            $table->string('element')->nullable();
        });

        Schema::dropIfExists('elements');
    }
};