<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $primaryKey = 'id';


    public $timestamps = false;

    protected $fillable = [
        'aname',
        'species',
    ];

    public function novels()
    {
        return $this->belongsToMany(
            Novel::class,
            'connecting',
            'animalid',
            'novelid'
        );
    }
}