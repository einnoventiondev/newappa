<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Competition;
class FormField extends Model
{
    use HasFactory;
    public function compitition(){
        return $this->belongsTo(Competition::class,'competition_id');
    }
}
