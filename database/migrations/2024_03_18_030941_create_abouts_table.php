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
        Schema::create('abouts', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->longText('overview_content')
                ->nullable();
            $table->longText('objective_content')
                ->nullable();
            $table->longText('vision_content')
                ->nullable();
            $table->longText('mission_content')
                ->nullable();
            $table->longText('ourteam_content')
                ->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
