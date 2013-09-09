<?php

use Illuminate\Database\Migrations\Migration;

class CreateFbfLaravelSimpleFaqsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('fbf_laravel_simple_faqs', function($table)
        {
            $table->increments('id');
            $table->string('question');
            $table->string('slug')->unique();
            $table->text('answer');
            $table->enum('status', array('DRAFT', 'APPROVED'))->default('DRAFT');
            $table->smallInteger('order');
            $table->timestamps();
            $table->softDeletes();
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('fbf_laravel_simple_faqs');
	}

}