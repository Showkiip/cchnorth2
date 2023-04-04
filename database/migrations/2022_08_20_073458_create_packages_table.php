<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('package_category_id')->nullable();
            $table->unsignedInteger('package_type_id')->nullable();
            $table->string('package_name')->nullable();
            $table->string('package_rating')->nullable();
            $table->string('person')->nullable();
            $table->string('adults')->nullable();
            $table->string('childs')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('sell_price')->nullable();
            $table->string('package_duration')->nullable();
            $table->text('package_description')->nullable();
            $table->string('package_image')->nullable();
            $table->string('package_file')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
