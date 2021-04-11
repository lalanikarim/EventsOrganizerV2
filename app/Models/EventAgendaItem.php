<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventAgendaItem extends Model
{
    use HasFactory;

    public function contacts()
    {
      return $this->belongsToMany(Contact::class);
    }

    public function event()
    {
      return $this->belongsTo(Event::class);
    }

    public function agenda_type()
    {
      return $this->belongsTo(AgendaType::class);
    }
}
