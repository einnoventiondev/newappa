<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corporate1 extends Model
{
    use HasFactory;
    protected $table='corporate1s';
    protected $fillable=[
'authentic_company',
'authentic_cv',
'authentic_cv1',
'authentic_cv2',
'authentic_cv3',
'check',
'authentic_program',
'authentic_history',
'authentic_place',
'authentic_target',
'authentic_history1'
    ];
}