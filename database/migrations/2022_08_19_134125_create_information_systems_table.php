<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_systems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('province');
            $table->text('city');
            $table->text('address');
            $table->text('description');
            $table->string('status');
            $table->string('x');
            $table->string('y');
            $table->string('thumbnail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('information_systems');
    }
}
