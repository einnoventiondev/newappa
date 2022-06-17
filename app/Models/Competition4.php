<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition4 extends Model
{
    protected $fillable = [
        'letter',

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

        'release1',
        'place1',
        'title1',
        'publishedWorks1',

        'release2',
        'place2',
        'title2',
        'publishedWorks2',

        'release3',
        'place3',
        'title3',
        'publishedWorks3',

        'release4',
        'place4',
        'title4',
        'publishedWorks4',

        'release5',
        'place5',
        'title5',
        'publishedWorks5',




    ];
    use HasFactory;
}
