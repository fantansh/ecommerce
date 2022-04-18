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
        //
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
           // $table->morphs('tokenable');
            $table->string('name');
            $table->string('unit', 64)->nullable();
            $table->double('price',8,2)->nullable();
            $table->integer('quantity')->nullable();
           // $table->timestamps();
        });
        
            schema::creat('product',function (Blueprinrt $table){
                $table->id();
                $table->timestamps();
            }

        
    }
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      schema::dropifExists('product');  
    }
}
