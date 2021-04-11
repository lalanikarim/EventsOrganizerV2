<?php

use App\Models\AgendaType;
use App\Models\Contact;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTypeContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda_type_contact', function (Blueprint $table) {
          $table->foreignIdFor(Contact::class);
          $table->foreignIdFor(AgendaType::class);
          $table->boolean('prefer');
          $table->timestamps();

          $table->primary(['contact_id','agenda_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda_type_contact');
    }
}
