<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loanFees extends Model
{
    use HasFactory;
    protected $fillable = [
        'loanID',
        'feeID',
        'amount',
        'orNo',
        'orDate',
        'orAmount',
    ];

    public function loan(){
        return $this->belongsTo(loan::class);
    }

    public function fees(){
        return $this->belongsTo(fees::class);
    }

    public function payment(){
        return $this->belongsTo(payment::class);
    }
}
