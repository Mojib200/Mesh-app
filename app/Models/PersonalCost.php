<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalCost extends Model
{
    use HasFactory;
    protected $guarded = [''];
    function relation_to_cost(){

        return $this->belongsTo(Cost::class,'cost_id');
    }
    function relation_to_name(){

        return $this->belongsTo(Name::class,'person_id');
    }
}
