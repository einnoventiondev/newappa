<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class individual1 extends Model
{
    use HasFactory;
    protected $table='individual1s';
    protected $fillable=[
        'authentic_type',
'authentic_name',
'authentic_date',
'authentic_project',
'authentic_company',
'authentic_options',
'authentic_manager_name',
'authentic_email',
'authentic_country',
'authentic_idea',
'authentic_link',
'authentic_contact',
'authentic_city',
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

    public function getAuthenticProgramAttribute($value)
    {
    	return json_decode($value);
    }
    public function getAuthenticHistoryAttribute($value)
    {
    	return json_decode($value);
    }
    public function getAuthenticHistory1Attribute($value)
    {
    	return json_decode($value);
    }
    public function getAuthenticPlaceAttribute($value)
    {
    	return json_decode($value);
    }
    public function getAuthenticTargetAttribute($value)
    {
    	return json_decode($value);
    }
    public function getAuthenticCvAttribute($value)
    {
        return json_decode($value);
    }
}
