<?php namespace vsb\BinTab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVsbBintabList2 extends Migration
{
    public function up()
    {
        Schema::create('vsb_bintab_list', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('bin');
            $table->string('direction', 16);
            $table->string('bank', 255)->nullable();
            $table->string('country', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vsb_bintab_list');
    }
}
