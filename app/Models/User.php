<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $timestamps=false;
    public function companyPhoneNumber(){
        return $this->hasOneThrough(PhoneNumber::class,Company::class);
    }
    public function company(){
        return $this->hasOne(Company::class);
    }
}
