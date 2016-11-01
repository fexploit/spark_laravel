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
        'c_name',
        'c_email',
        'c_phone',
        'c_street',
        'c_streetNum',
        'c_zip',
        'c_city',
        'c_country',
        'c_kvk',
        'c_btw',
        //contact person
        'p_firstName',
        'p_lastName',
        'p_email',
        'p_phone',
        'p_mobile',
        'p_street',
        'p_streetNum',
        'p_zip',
        'p_city',
        'p_country',
        'ending_on'
    ];

    protected $hidden = [
      'id',
      'user_id',
      'created_on'
    ];
}
