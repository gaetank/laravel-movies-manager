<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;

class Realisator extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'age'
    ];

    public function movies() {
        return $this->hasMany(Movie::class);
    }

    // public function __toString()
    // {
    //     return $this->firstname + ' ' + $this->lastname;
    // }
}