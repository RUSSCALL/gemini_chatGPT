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
        Schema::create('responses', function (Blueprint $table) {
            $table->uuid('chat_id');
            $table->unsignedBigInteger('user_id')->default(1);
            $table->unsignedBigInteger('prompt_id');
            $table->longText('content');
            $table->timestamps();

            $table->foreign('chat_id')->references('uuuid')->on('chat')->onDelete('cascade');
            $table->foreign('prompt_id')->references('id')->on('prompts')->onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responses');
    }
};
