<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

class Customer extends Authenticatable implements JWTSubject
{
    use HasFactory;

    protected $guarded=[];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    protected $hidden=[
        'password'
    ];
    
    //full_name=FullName
    //get + attribute name + attribute 
    public function getFullNameAttribute(){

        return $this->first_name.' '. $this->last_name;

    }


    public function setFirstNameAttribute($value)
    {

        return $this->attributes['first_name']=ucfirst($value);

    }

    public function setEmailAttribute($value)
    {

        return $this->attributes['email']=strtolower($value);

    }



}
