<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Todos extends Model
{
    protected $fillable = [
    	'title',
    	'body',
    	'urgency'
    ];
}
