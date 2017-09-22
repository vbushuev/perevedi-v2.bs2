<?php namespace vsb\BinTab\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVsbBintabList extends Migration
{
    public function up()
    {
        Schema::create('vsb_bintab_list', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('bin')->unsigned();
            $table->string('direction', 16)->default('indoor');
            $table->string('bank', 255)->nullable();
            $table->string('country', 255)->nullable();
            $table->primary(['bin']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vsb_bintab_list');
    }
}
