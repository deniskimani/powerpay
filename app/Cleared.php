<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cleared extends Model
{
    protected $table ="responses";

    protected $fillable = [
        'status'
    ];
}
