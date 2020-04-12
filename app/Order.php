<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    protected $fillable = ['carname', 'type','price'];
}
