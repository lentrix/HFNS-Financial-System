<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    public $fillable = ['level', 'name'];

    public function section(){
        return $this->hasMany(Section::class);
    }

    public function templateCharge(){
        return $this->hasMany(TemplateCharge::class);
    }
}
