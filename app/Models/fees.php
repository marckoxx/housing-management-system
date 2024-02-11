<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fees extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'defAmount',
        'dateOfSetting',
        'isCurrent',
        'paymentName'
    ];

    public function loanFees(){
        return $this->hasMany(loanFees::class);
    }
}
