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
        'behalf_candidate_name',
        'behalf_options',
        'behalf_name',
        'behalf_type',
        'behalf_date',
        'behalf_country',
        'behalf_city',
        'behalf_about',
        'behalf_site',
    ];
}
