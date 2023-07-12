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


        // if (!Schema::hasTable('products')) {
        //     Schema::create('products', function (Blueprint $table) {
        //         // your table definition here
        //         $table->id();
        //         $table->unsignedInteger('category_id');
        //         $table->string('name');
        //         $table->string('slug')->nullable();
        //         $table->string('brand')->nullable();
        //         $table->mediumText('small_description')->nullable();
        //         $table->longText('description')->nullable();
    
        //         $table->integer('original_price');
        //         $table->integer('selling_price');
        //         $table->integer('quantity');
        //         $table->tinyInteger('treending')->nullable()->comment('1 = tranding, 0 = not tranding');
        //         $table->tinyInteger('status')->default('0')->comment('1=hidden, 0=visible');
    
        //         $table->string('meta_title')->nullable();
        //         $table->mediumText('meta_keyword')->nullable();
        //         $table->mediumText('meta_description')->nullable();
    
        //         $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        //         $table->timestamps();

        //     });
        // }




        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('category_id');
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('brand')->nullable();
            $table->mediumText('small_description')->nullable();
            $table->longText('description')->nullable();

            $table->integer('original_price');
            $table->integer('selling_price');
            $table->integer('quantity');
            $table->tinyInteger('treending')->nullable()->comment('1 = tranding, 0 = not tranding');
            $table->tinyInteger('status')->default('0')->comment('1=hidden, 0=visible');

            $table->string('meta_title')->nullable();
            $table->mediumText('meta_keyword')->nullable();
            $table->mediumText('meta_description')->nullable();
            $table->string('product_image')->nullable();

            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
