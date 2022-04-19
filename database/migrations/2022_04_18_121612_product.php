<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products', function (Blueprint $table) {
            $table->id();
           // $table->morphs('tokenable');
            $table->string('name');
            $table->string('unit', 64)->nullable();
            $table->double('price',8,2)->nullable();
            $table->integer('quantity')->nullable();
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
        schema::dropIfExists('product');  
    }
    }

 
