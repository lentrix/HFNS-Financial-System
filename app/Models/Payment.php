<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public $fillable = ['account_id', 'date', 'amount'];

    public function account(){
        return $this->belongsTo(Account::class, 'account_id');
    }
}
