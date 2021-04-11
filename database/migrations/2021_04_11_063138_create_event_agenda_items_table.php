<?php

use App\Models\AgendaType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Event;

class CreateEventAgendaItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_agenda_items', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Event::class);
            $table->foreignIdFor(AgendaType::class);
            $table->integer('sort_id');
            $table->text('pre_notes');
            $table->timestamps();

            $table->unique(['event_id','sort_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_agenda_items');
    }
}
