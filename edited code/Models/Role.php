<?php

namespace hospital\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
 {

public function permissions()
  {
  	return $this->belongsToMany(Permission::class);
  }

public function assign(Permission $permission)
  {
  	return $this->permissions()->save($permission);
  }

public function getRole(){
        if ($this->name){
            return "{$this->name}";
        }
        return null;

    }


  
}
