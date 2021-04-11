<?php

use App\Models\AgendaType;
use App\Models\EventType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTypeEventTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda_type_event_type', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->foreignIdFor(EventType::class);
            $table->foreignIdFor(AgendaType::class);
            $table->timestamps();

            $table->primary(['id','event_type_id','agenda_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda_type_event_type');
    }
}
