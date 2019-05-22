<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    //
    protected $fillable = [
        'n_pekerjaan','d_pekerjaan'
    ];

    public function valid()
    {
        return array(
            'n_pekerjaan' => 'required',
            'd_pekerjaan' => 'required',
        );
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
