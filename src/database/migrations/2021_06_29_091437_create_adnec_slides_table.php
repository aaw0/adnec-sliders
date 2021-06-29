<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdnecSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adnec_slides', function (Blueprint $table) {
            $table->id();
            $table->string('title_en',255);
            $table->string('title_ar',255)->nullable();
            $table->string('link',255)->nullable();
            $table->string('link_text_en',255)->nullable();
            $table->string('link_text_ar',255)->nullable();
            $table->string('position',255)->nullable();
            $table->string('color_class',255)->nullable();
            $table->string('image',255)->nullable();
            $table->string('image_webp',255)->nullable();
            $table->string('image_bg',255)->nullable();
            $table->text('content_en')->nullable();
            $table->text('content_ar')->nullable();
            $table->boolean('is_published')->default(true);
            $table->integer('sort_order');
            $table->softDeletes();
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
        Schema::dropIfExists('slides');
    }
}
