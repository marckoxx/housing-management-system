<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'orDate',
        'payee',
        'orStatus',
        'orBatchNo',
        'checkNo',
        'checkDate',
        'checkBankName',
        'amount',
        'employeeID',
        'modifiedDate',
    ];

    public function employee(){
        return $this->belongsTo(employee::class);
    }

    public function loanFees(){
        return $this->hasMany(loanFees::class);
    }
}
