<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
      'name'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function objects()
    {
        return $this->hasMany(Object::class);
    }
}
