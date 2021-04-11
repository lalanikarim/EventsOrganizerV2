<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function preferences()
    {
      return $this->belongsToMany(AgendaType::class)->withPivot('prefer');
    }

    public function event_agenda_items()
    {
      return $this->belongsToMany(EventAgendaItem::class)->withPivot(['user_id','post_notes']);
    }
}
