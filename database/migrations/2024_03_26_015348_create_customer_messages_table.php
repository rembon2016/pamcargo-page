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
        Schema::create('customer_messages', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('firstname', 100);
            $table->string('lastname', 100)->nullable();
            $table->string('email', 50);
            $table->string('phone', 30)->nullable();

            $table->longText('message');

            $table->boolean('is_read')->default(false);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_messages');
    }
};
