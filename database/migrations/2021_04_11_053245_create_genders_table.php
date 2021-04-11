<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genders', function (Blueprint $table) {
            $table->tinyInteger('id')->primary();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('genders')->insert(['id'=>0,'name'=>'Unspecified']);
        DB::table('genders')->insert(['id'=>1,'name'=>'Female']);
        DB::table('genders')->insert(['id'=>2,'name'=>'Male']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genders');
    }
}
