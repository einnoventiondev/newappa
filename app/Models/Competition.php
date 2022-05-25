<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = [
        'letter',
        'type',
        'form',
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
        'accept',
		'phone_number2',
		'age',
		'uni_number',
		'uni_email',
		'fieldname',
    ];

    use HasFactory;
}
