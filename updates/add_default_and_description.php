<?php namespace ShahiemSeymor\Roles\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateDefaultAndDescription extends Migration
{

    public function up()
    {
        Schema::table('shahiemseymor_roles', function($table)
        {
            $table->text('description')->nullable();
            $table->integer('default_group')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('shahiemseymor_roles');
    }

}
