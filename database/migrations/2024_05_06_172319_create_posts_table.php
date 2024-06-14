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
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('title',200);
            $table->text('subtitle')->nullable();
            $table->text('content');
            $table->string('slug', 100)->nullable()->unique();
            $table->foreignUuid('user_id')->constrained('users');
            $table->date('date');
            $table->string('status')->default(App\Enums\News\PostStatus::DRAFT->value);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
