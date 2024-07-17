<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $fillable = ['last_name', 'first_name', 'mi',
                     'gender', 'birth_date', 'birth_place', 'address', 'father',
                    'mother','phone'];

    public function account(){
        return $this->hasMany(Account::class);
    }
}
