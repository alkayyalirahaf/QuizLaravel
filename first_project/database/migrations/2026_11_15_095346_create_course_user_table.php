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
    Schema::create('course_user', function (Blueprint $table) {
        $table->id();

        $table->foreignId('user_id')
            ->constrained('users')
            ->cascadeOnDelete();

        $table->foreignId('course_id')
            ->constrained('courses')
            ->cascadeOnDelete();

        $table->timestamp('enrollment_date');
        $table->decimal('grade', 5, 2)->nullable();

        $table->timestamps();

        $table->unique(['user_id', 'course_id']);
    });
}

public function down(): void
{
    Schema::dropIfExists('course_user');
}

};
