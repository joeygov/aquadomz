<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Operator extends Model
{
    use SoftDeletes;

   protected $fillable = [
    
        'operator_id',
        'username',
        'password',
        'firstname',
        'middlename',
        'lastname',
        'address',
        'contact_number'

   
   ];
}
