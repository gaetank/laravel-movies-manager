<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'prix',
        'trailer'
    ];

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function realisator() {
        return $this->hasOne(Realisator::class);
    }
}
