<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'travel_packages_id','users_id','additional_visa',
        'transaction_total','transaction_status'
    ];

    protected $hidden = [];


    public function details()
    {
        return $this->hasMany(TransactionDetail::Class,'transaction_id','id');
    }

    public function travel_package()
    {
        return $this->belongsTo(TravelPackage::Class,'travel_packages_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::Class,'users_id','id');
    }


}
