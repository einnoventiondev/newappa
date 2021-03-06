<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FormField;
class Competition extends Model
{
    protected $table='competitions';
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

    public function formfield(){
        return $this->hasOne(FormField::class,'');
    }
}
