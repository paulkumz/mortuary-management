<?php

namespace hospital;


use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    public function roles()
    {
    	return $this->belongsToMany(Role::class);
    } 
}
