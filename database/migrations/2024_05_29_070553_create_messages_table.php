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
            $table->id();
            $table->text('message')->nullable();
            $table->foreignId('message_category_id')->nullable()->index(); //message category id
            $table->foreignId('customer_id')->nullable()->index(); //customer id
            $table->foreignId('employee_id')->nullable()->index(); //employee id
            $table->enum('status', ['new', 'assigned', 'solved'])->nullable()->default('new');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
