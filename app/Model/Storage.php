<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title', 'note'
    ];
}
