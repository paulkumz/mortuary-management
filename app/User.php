<?php

namespace hospital;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    protected $fillable = [
        'username',
        'email', 
        'password',
        'first_name',
        'last_name',
        'title',
        
    ];

    
    protected $hidden = [
        'password',
        'remember_token',
    ];
 public function getName(){
        if ($this->first_name && $this->last_name){
            return "{$this->first_name} {$this->last_name}";
        }

        if ($this->first_name) {
            return $this->first_name;
        }
       return null;

        }
public function getSurname(){
        if ($this->last_name){
            return "{$this->last_name}";
        }
        return null;
         }
public function getTitle(){
        if ($this->title){
            return "{$this->title}";
        }
        return null;

    }
    public function getNameOrUsername()
    {
        return $this->getName() ?: $this->username;
    }

    public function getFirstNameOrUsername()
    {
        return $this->first_name ?: $this->username;
    }
    public function getAvatarUrl()
    {
     return "https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50";    
    }
    public function roles()
      {
    return $this->belongsToMany(Role::class);

    } 

    public function hasRole($role)
     {
    if(is_string($role))
    {
        return $this->roles->contains('name', $role);
    }

    return !! $role->intersect($this->roles)->count();
  }

  public function assign($role)
  {
     if(is_string($role))
     {
       return $this->roles()->save(
           Role::whereName($role)->firstOrFail()
            );
     }

   return $this->roles()->save($role); 
  }


    
    
}
