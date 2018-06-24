<?php

namespace Furbook;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = ['name', 'date_of_birth','breed_id'];
    public function Breed()
    {
        return $this->belongsTo('Furbook\Breed');
    }
    public function getRouteKeyName()
    {
        return 'name'; // TODO: Change the autogenerated stub
    }
}