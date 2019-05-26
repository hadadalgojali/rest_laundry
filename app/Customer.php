<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = 'customer';
    protected $fillable = ['id', 'first_name', 'last_name', 'address', 'phone',
    'email'
  ];
}
