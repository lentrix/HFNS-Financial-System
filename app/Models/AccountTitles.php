<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountTitles extends Model
{
    use HasFactory;

    public $fillable = ['title'];

    public function templateCharge(){
        return $this->hasMany(TemplateCharge::class);
    }

    public function charge(){
        return $this->hasMany(Charge::class);
    }
}
