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
        'trailer',
        'realisator_id'
    ];

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function realisator() {
        return $this->hasOne(Realisator::class);
    }
}
