<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodosTable extends Migration
{
    public function up() //is used for creating and updating databases
    {
       Schema::create('todos', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('title')->unique(); //unique varchar equivalent column
        $table->text('body'); //text equivalent column
        $table->timestamps();
        
     });
     
    }

    public function down() //used to reverse the operations of the up method
    {
        Schema::dropIfExists('todos');
  
    }

    

    
    
}
