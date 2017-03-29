<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $fillable = ['name', 'description'];

    public function Items() {
        return $this->hasMany('App\Models\Item');
    }
}