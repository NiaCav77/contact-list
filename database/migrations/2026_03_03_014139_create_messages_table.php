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
        Schema::create('messages', function (Blueprint $table) {
            //$table->unsignedBigInteger('id')->autoIncrement()->unique();
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('subject', 128);
            $table->string('topic_id', 16)->default("general");
            $table->text('message');
            //$table->boolean('read')->default(false);//not needed
            //$table->dateTime('read_at')->nullable();//replaced
            $table->timestamp('read_at')->nullable();
            //$table->dateTime('created_at')->nullable();//replaced
            //$table->dateTime('updated_at')->nullable();//replaced
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::table('messages', function (Blueprint $table) {
            //
        //});
        Schema::dropIfExists('messages');
    }
};
