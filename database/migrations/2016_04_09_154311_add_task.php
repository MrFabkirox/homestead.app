<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTask extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       DB::table('tasks')->insert(array(
         'name'=>'Wash the car before going to holiday',
         'slug'=>'wash the car',
         'created_at'=>date('Y-m-d H:m:s'),
         'updated_at'=>date('Y-m-d H:m:s')
       )); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('tasks')->where('name', '-', 'Wash the car before going to holiday');
    }
}
