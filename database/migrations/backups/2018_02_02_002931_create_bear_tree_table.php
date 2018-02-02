<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBearTreeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bear_tree', function (Blueprint $table) {
            //$table->increments('id');
            //$table->timestamps();
            $table->integer("bear_id")->unsigned();
            $table->integer("tree_id")->unsigned();

		$table->unique(["bear_id","tree_id"]);

		$table->foreign("bear_id")
			->references("id")
			->on("bears")
			->onDelete("RESTRICT");
		$table->foreign("tree_id")
			->references("id")
			->on("trees")
			->onDelete("RESTRICT");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bear_tree');
    }
}
