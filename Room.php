<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $table = 'rooms';
    protected $fillable = [
        'username', 'email', 'option','num_of_room','num_of_guest'
    ];

    public function getOptionAttribute()
    {
        $room ;
        if($this->attributes['option'] != null)
        {
            $room = $this->attributes['option'];
        }
        return $room;
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
