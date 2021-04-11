<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_types', function (Blueprint $table) {
            $table->tinyInteger('id')->primary();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('contact_types')->insert(['id'=>0,'name'=>'Not Specified']);
        DB::table('contact_types')->insert(['id'=>1,'name'=>'Student']);
        DB::table('contact_types')->insert(['id'=>2,'name'=>'Adult']);
        DB::table('contact_types')->insert(['id'=>3,'name'=>'Senior']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_types');
    }
}
