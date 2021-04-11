<?php

use App\Models\Contact;
use App\Models\EventAgendaItem;
use App\Models\User;
use App\Models\Event;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactEventAgendaItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_event_agenda_item', function (Blueprint $table) {
          $table->id();
          $table->foreignIdFor(EventAgendaItem::class);
          $table->foreignIdFor(Contact::class);
          $table->foreignIdFor(User::class);
          $table->text('post_notes');
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
        Schema::dropIfExists('contact_event_agenda_item');
    }
}
