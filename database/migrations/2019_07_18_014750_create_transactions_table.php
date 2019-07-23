<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
               $table->increments('id');
            $table->string('code');
             //relasi user
         
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->on('users')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
         
            

            $table->unsignedInteger('product_id')->nullable();
            $table->foreign('product_id')
                ->on('products')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
         
          
             //relasi user
                $table->unsignedInteger('desk_id')->nullable();
                $table->foreign('desk_id')
                ->on('desks')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        
         
       
            $table->integer('qty');
            $table->integer('subtotal');
            
            //send to
            $table->string('name');
            $table->enum('payment_status',['0','1']);
            $table->enum('product_status',['on_cooking','delivered','served']);
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
        Schema::dropIfExists('transactions');
    }
}
