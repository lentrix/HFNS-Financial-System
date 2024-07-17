<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    use HasFactory;


    public $fillable = ['account_id', 'account_title_id', 'amount'];

    public function account(){
        return $this->belongsTo(Account::class, 'account_id');
    }

    public function accountTitle(){
        return $this->belongsTo(AccountTitles::class, 'account_title_id');
    }

}
