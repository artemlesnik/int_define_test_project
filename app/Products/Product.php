<?php

namespace App\Products;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Products\Options;

class Product extends Model
{
    use SoftDeletes;

    protected $table = 'products';

    public function options() {
        return $this->belongsToMany(Options\Option::class);
    }
}
