<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatsAlterDropParentidDropRank extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
		Schema::table('categories', function( Blueprint $table ){
			$table->dropColumn('parent_id');
			$table->dropColumn('rank');
		});
	}
//______________________________________________________________________________

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down(){
		Schema::table('categories', function( Blueprint $table ){
			$table->integer('parent_id', FALSE, TRUE );
			$table->integer('rank', FALSE, TRUE )->default( 0 );
		});
	}
//______________________________________________________________________________

}
