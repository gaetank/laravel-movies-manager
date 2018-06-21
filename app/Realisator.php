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
}