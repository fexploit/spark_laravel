<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        //company
        'name',
        'email',
        'phone',
        'street',
        'streetNum',
        'zip',
        'city',
        'country',
        'kvk',
        'btw',
    ];

    protected $hidden = [
      'id',
      'user_id',
      'created_on'
    ];
}
