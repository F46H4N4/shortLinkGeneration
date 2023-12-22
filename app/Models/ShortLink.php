<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortLink extends Model
{
    use HasFactory;
    protected $table='ShortLink';
    protected $Fillable=[
        'urlAddress',
        'shorturl'
    ];
}
