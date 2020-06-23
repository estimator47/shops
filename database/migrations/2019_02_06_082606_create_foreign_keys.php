<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

public function up()
	{
 		Schema::table('carts', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('apimessages', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});		
	}
	public function down()
	{
		Schema::table('carts', function(Blueprint $table) {
			$table->dropForeign('users_user_id_foreign');
		});
		Schema::table('apimessages', function(Blueprint $table) {
			$table->dropForeign('users_user_id_foreign');
		});
	}
	
}