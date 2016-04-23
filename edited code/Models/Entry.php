<?php

namespace hospital\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
   protected $fillable = [
        'first_name',
        'last_name',
        'dod',
        'dob',
        'sex',
        'age',
        'death_id',
        'kin',
        'address',
        'medical',
        'illness',
        'funeral',
        'duration',
        'death_cause',
        'medication',
        'post_mortem',
        'mortuarybill',
        'hospitalbill',

        
    ];

    
    protected $hidden = [
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
public function getAge(){
        if ($this->age){
            return "{$this->age}";
        }
        return null;

         }
public function getSex(){
        if ($this->sex){
            return "{$this->sex}";
        }
        return null;

    }
public function getDob(){
        if ($this->dob){
            return "{$this->dob}";
        }
        return null;

    }
public function getDod(){
        if ($this->dod){
            return "{$this->dod}";
        }
        return null;

    }
public function getNextOfKin(){
        if ($this->kin){
            return "{$this->kin}";
        }
        return null;

        }
public function getAddress(){
        if ($this->address){
            return "{$this->address}";
        }
        return null;

    }
public function getMedicalCover(){
        if ($this->medical){
            return "{$this->medical}";
        }
        return null;

    }

public function getFuneralCover(){
        if ($this->funeral){
            return "{$this->funeral}";
        }
        return null;

    }
public function getIllness(){
        if ($this->illness){
            return "{$this->illness}";
        }
        return null;

    }
public function getDuration(){
        if ($this->duration){
            return "{$this->duration}";
        }
        return null;

    }
public function getDeathCause(){
        if ($this->death_cause){
            return "{$this->death_cause}";
        }
        return null;

    }
public function getMedication(){
        if ($this->medication){
            return "{$this->medication}";
        }
        return null;

    }
public function getPostMortem(){
        if ($this->post_mortem){
            return "{$this->post_mortem}";
        }
        return null;

    }
public function getHospitalBill(){
        if ($this->hospitalbill){
            return "{$this->hospitalbill}";
        }
        return null;

    }
public function getMortuaryBill(){
        if ($this->mortuarybill){
            return "{$this->mortuarybill}";
        }
        return null;

    }
    public function getAvatarUrl()
    {
     return "https://www.gravatar.com/avatar/{{ md5($this->email) }}?d=mm&s=40";   
    } 


}
