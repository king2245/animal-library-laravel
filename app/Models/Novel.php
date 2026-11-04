<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'pyear',
        'title',
        'publisher',
    ];

    public function animals()
    {
        return $this->belongsToMany(
            Animal::class,
            'connecting',
            'novelid',
            'animalid'
        );
    }
}