<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    //
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
