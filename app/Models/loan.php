<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'beneficiaryID',
        'lotID',
        'loanAmount',
        'dateGranted',
        'startDate',
        'dPaymentDeadline',
        'maturityDate',
        'amortiFactorID',
        'monthAmort',
        'interestRate',
        'employeeID',
        'modifiedDate',
        'loanStat',
        'loanType',
        'equityRate',
        'equity',
        'totalProjCost',
        'carryOverInterest',
        'carryOverPenalty',
        'monthlyPrincipal',
        'monthlyInterest',
        'monthlyCoInterest',
        'monthlyCoPenalty',
    ];

    public function employee(){
        return $this->belongsTo(employee::class);
    }

    public function amortizationFactor(){
        return $this->belongsTo(amortizationFactor::class);
    }

    public function lot(){
        return $this->belongsTo(lot::class);
    }

    public function client(){
        return $this->belongsTo(client::class);
    }

    public function givenPrevLoan(){
        return $this->hasMany(givenPrevLoan::class);
    }

    public function loanFees(){
        return $this->hasMany(loanFees::class);
    }
}
