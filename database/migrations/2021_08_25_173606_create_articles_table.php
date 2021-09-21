<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('type', 100);
            $table->string('subtype', 100);
            $table->string('title', 100);
            $table->string('quip', 200)->nullable();
            $table->string('excerpt', 300);
            $table->string('heading1', 50);
            $table->string('heading2', 50)->nullable();
            $table->string('heading3', 50)->nullable();
            $table->string('heading4', 50)->nullable();
            $table->string('heading5', 50)->nullable();
            $table->string('heading6', 50)->nullable();
            $table->string('heading7', 50)->nullable();
            $table->string('heading8', 50)->nullable();
            $table->string('heading9', 50)->nullable();
            $table->string('heading10',50)->nullable();
            $table->text('paragraph1Heading1', 350);
            $table->text('paragraph2Heading1', 350)->nullable();
            $table->text('paragraph3Heading1', 350)->nullable();    
            $table->text('paragraph1Heading2', 350)->nullable(); 
            $table->text('paragraph2Heading2', 350)->nullable();
            $table->text('paragraph3Heading2', 350)->nullable();    
            $table->text('paragraph1Heading3', 350)->nullable();
            $table->text('paragraph2Heading3', 350)->nullable();
            $table->text('paragraph3Heading3', 350)->nullable();    
            $table->text('paragraph1Heading4', 350)->nullable();
            $table->text('paragraph2Heading4', 350)->nullable();
            $table->text('paragraph3Heading4', 350)->nullable();    
            $table->text('paragraph1Heading5', 350)->nullable();
            $table->text('paragraph2Heading5', 350)->nullable();
            $table->text('paragraph3Heading5', 350)->nullable();    
            $table->text('paragraph1Heading6', 350)->nullable();
            $table->text('paragraph2Heading6', 350)->nullable();
            $table->text('paragraph3Heading6', 350)->nullable();    
            $table->text('paragraph1Heading7', 350)->nullable();
            $table->text('paragraph2Heading7', 350)->nullable();
            $table->text('paragraph3Heading7', 350)->nullable();    
            $table->text('paragraph1Heading8', 350)->nullable();
            $table->text('paragraph2Heading8', 350)->nullable();
            $table->text('paragraph3Heading8', 350)->nullable();
            $table->text('paragraph1Heading9', 350)->nullable();
            $table->text('paragraph2Heading9', 350)->nullable();
            $table->text('paragraph3Heading9', 350)->nullable();
            $table->text('paragraph1Heading10', 350)->nullable();
            $table->text('paragraph2Heading10', 350)->nullable();
            $table->text('paragraph3Heading10', 350)->nullable();
            $table->text('image_name')->nullable();
            $table->text('image1_name')->nullable();
            $table->text('image2_name')->nullable();
            $table->text('image3_name')->nullable();
            $table->text('image4_name')->nullable();
            $table->text('image5_name')->nullable();
            $table->text('image6_name')->nullable();
            $table->text('image7_name')->nullable();
            $table->text('image8_name')->nullable();
            $table->text('image9_name')->nullable();
            $table->text('image10_name')->nullable();
            $table->text('imageCredit', 1000)->nullable();
            $table->text('imageCredit1', 1000);
            $table->text('imageCredit2', 1000)->nullable();
            $table->text('imageCredit3', 1000)->nullable();
            $table->text('imageCredit4', 1000)->nullable();
            $table->text('imageCredit5', 1000)->nullable();
            $table->text('imageCredit6', 1000)->nullable();
            $table->text('imageCredit7', 1000)->nullable();
            $table->text('imageCredit8', 1000)->nullable();
            $table->text('imageCredit9', 1000)->nullable();
            $table->text('imageCredit10',1000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
