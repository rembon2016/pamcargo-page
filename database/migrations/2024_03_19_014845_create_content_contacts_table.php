<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('content_contacts', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('mark');
            $table->string('title');
            $table->string('icon')->nullable();

            $table->longText('description');

            $table->boolean('is_active');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('content_contacts');
    }
};
