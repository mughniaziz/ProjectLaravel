<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CV extends Model
{
    //

    protected $fillable = [
        'user_id','file','statfile',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
