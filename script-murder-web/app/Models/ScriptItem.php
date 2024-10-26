<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScriptItem extends Model
{
    // Specify the table name explicitly
    protected $table = 'script_item';

    // Specify which fields are mass assignable if needed
    protected $fillable = ['scriptname', 'location', 'event_date', 'price', 'picture', 'description'];
}

