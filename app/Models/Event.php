<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function agenda_items()
    {
      return $this->hasMany(EventAgendaItem::class);
    }

    public function agenda_types()
    {
      return $this->belongsToMany(AgendaType::class)->withPivot(['id','sort_id']);
    }

    public function event_type()
    {
      return $this->belongsTo(EventType::class);
    }

    public function location()
    {
      return $this->belongsTo(Location::class);
    }
}
