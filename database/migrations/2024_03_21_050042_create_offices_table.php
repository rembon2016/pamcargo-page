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
        Schema::create('offices', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->foreignUuid('country_id')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade');

            $table->foreignUuid('continent_id')
                ->references('id')
                ->on('continents')
                ->onDelete('cascade');

            $table->string('name');
            $table->string('image_url');
            $table->string('longitude');
            $table->string('latitude');

            $table->string('first_contact_name', 100);
            $table->string('second_contact_name', 100)->nullable();

            $table->string('first_telp_num', 50);
            $table->string('second_telp_num', 50)->nullable();

            $table->string('first_fax', 50);
            $table->string('second_fax', 50)->nullable();

            $table->string('first_mob', 150);
            $table->string('second_mob', 150)->nullable();

            $table->string('first_email', 100);
            $table->string('second_email', 100)->nullable();

            $table->string('first_website');
            $table->string('second_website')->nullable();

            $table->text('address')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('offices');
    }
};
