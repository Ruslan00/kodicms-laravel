<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatasourceFieldGroups extends Migration
{
	public function up()
	{
		Schema::create('datasource_field_groups', function (Blueprint $table)
		{
			$table->increments('id');

			$table->integer('section_id')->index();
			$table->integer('field_id')->index();

			$table->string('name');
			$table->integer('position')->default(0);

			$table->unique(['section_id', 'field_id']);

			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('datasource_field_groups');
	}
}
