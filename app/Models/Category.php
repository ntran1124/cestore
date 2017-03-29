<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['code', 'name', 'description'];

    public function setCodeAttribute($value) {
        $this->attributes['code'] = strtoupper($value);
    }

    public function Department() {
        return $this->belongsTo('App\Models\Department', 'department_id');
    }

    public function Items() {
        return $this->hasMany('App\Models\Item');
    }
}