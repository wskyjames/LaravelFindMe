<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLostItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lost_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_type_id')->unsigned();
            $table->foreign('item_type_id')->references('id')->on('item_types');
            $table->string('location')->nullable();         
            $table->text('description');
            $table->enum('is_found', array(
                'Y',
                'N'
            ));
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
        Schema::drop('lost_items');
    }
}
