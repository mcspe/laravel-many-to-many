<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id')->nullable();
	          $table->foreign('type_id')->references('id')->on('types')->onDelete('set null');
            $table->string('title', 50);
            $table->string('slug', 50)->unique();
            $table->string('image_path')->nullable();
            $table->text('summary');
            $table->string('link');
            $table->timestamps();
	          $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
