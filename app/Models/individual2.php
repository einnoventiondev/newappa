<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class individual2 extends Model
{
    use HasFactory;
    protected $table='individual2s';
    protected $fillable=[
        'behalf_site',
    ];
}
