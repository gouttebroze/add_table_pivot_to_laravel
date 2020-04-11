<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

       
        Schema::create('products', function (Blueprint $table) {
           // $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->string('artist_name');
            $table->string('product_name');
            $table->string('desc_product');
            $table->string('img_filename');
            $table->string('images');
            //$table->string('price_product');
            $table->decimal('price_product', 8, 2);
            $table->year('year');
            
            //$table->bigInteger('category_id')->unsigned();
            $table->timestamps();
            /*$table->foreign('category_id') 
            ->references('id')
            ->on('categories')//créer une migration "category" (avec ou sans "s"?)par éloquent comme j'ai fait pr "products" ou peu importe? voir alors code pr la foreignkey + si l'ordre est le bon? faire schéma!!!
            ;*/

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
