<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['category_id', 'manufacturer', 'code', 'name', 'description'];

    public function Category() {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function Manufacturer() {
        return $this->belongsTo('App\Models\Manufacturer', 'manufacturer_id');
    }
}