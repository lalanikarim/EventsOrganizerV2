<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function gender()
    {
      return $this->belongsTo(Gender::class);
    }

    public function contact_type()
    {
      return $this->belongsTo(ContactType::class);
    }

    public function preferences()
    {
      return $this->belongsToMany(AgendaType::class)->withPivot('prefer');
    }

    public function event_agenda_items()
    {
      return $this->belongsToMany(EventAgendaItem::class)->withPivot(['contact_id','user_id','post_notes']);
    }
}
