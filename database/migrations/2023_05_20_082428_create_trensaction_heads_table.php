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
        Schema::create('trensaction_heads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('trans_id')->nullable();
            $table->text('trans_buy')->nullable();
            $table->text('purpose')->nullable();
            $table->string('receipt')->nullable();
            $table->string('payment')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->string('tans_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trensaction_heads');
    }
};
