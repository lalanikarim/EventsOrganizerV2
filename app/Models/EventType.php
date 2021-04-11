<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    use HasFactory;

    public function events()
    {
      return $this->hasMany(Event::class);
    }

    public function agenda_types()
    {
      return $this->belongsToMany(AgendaType::class)->withPivot(['id']);
    }
}
