<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Connecting extends Model
{
    protected $table = 'connecting';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = null;

    protected $fillable = [
        'animalid',
        'novelid',
    ];
}