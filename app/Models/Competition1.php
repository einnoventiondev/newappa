<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition1 extends Model
{
    protected $fillable = [
        'letter',
        'type',
        'publishedWorks',
        'candidateImage',
        'passportimages',
        'release',
        'place',
        'title',
        'relation',
        'about',
        'idNumber',
        'inputNationality',
        'inputName',
        'inputEmail',
        'phoneNumber',
        'state',
        'orgniztionName',
    ];
    use HasFactory;
}
