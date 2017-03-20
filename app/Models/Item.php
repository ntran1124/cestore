<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'description'];

    public function setNameAttribute($value) {
        $this->attributes['name'] = strtolower($value);
    }

    public function getNameAttribute($value) {
        return strtoupper($value);
    }
}