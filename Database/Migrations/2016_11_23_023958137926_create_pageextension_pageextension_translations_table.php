<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageextensionPageExtensionTranslationsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pageextension__pageextension_translations', function(Blueprint $table) {
			$table->engine = 'InnoDB';
            $table->increments('id');
            // Your translatable fields

            $table->integer('page_extension_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['page_extension_id', 'locale'],'page_extension_id_unique');
            $table->foreign('page_extension_id','page_extension_id_unique')->references('id')->on('pageextension__pageextensions')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pageextension__pageextension_translations');
	}
}
