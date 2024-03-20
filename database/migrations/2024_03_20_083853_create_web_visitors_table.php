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
        Schema::create('web_visitors', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('session_id')->index();
            $table->string('ip')->index();
            $table->string('url');

            $table->boolean('ajax')->index();

            $table->jsonb('payload')->nullable();

            $table->integer('status_code')->index();

            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('web_visitors');
    }
};
