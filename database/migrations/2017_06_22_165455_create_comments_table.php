<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');  
            $table->unsignedInteger('rest_id');
            $table->integer('user_id')->unsigned();
            $table->text('comment');
            $table->boolean('approved');
            $table->timestamps();
            $table->foreign('rest_id')
            ->references('id')->on('restaurants')
            ->onDelete('cascade');
        });
 }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign('rest_id');;
        Schema::dropIfExists('comments');  // Then drop the table
    }

}
