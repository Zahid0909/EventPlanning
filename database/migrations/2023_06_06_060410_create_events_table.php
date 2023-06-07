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
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table
                ->foreignId('category_id')
                ->constrained('categories')
                ->onDelete('cascade');

            $table->string('event_name');
            $table->string('location')->nullable();
            $table->date('date');
            $table->time('time');
            $table->text('description');
            $table->decimal('price_per_ticket', 8, 2);
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
