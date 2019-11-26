<?php

namespace App\Products\Options;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $hidden = ['created_at', 'updated_at', 'pivot', 'option_type_id'];
}
