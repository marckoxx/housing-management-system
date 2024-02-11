<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class amortizationFactor extends Model
{
    use HasFactory;

    protected $fillable = [
        'noOfYears',
        'interestRate',
        'amortizationFactor',
        'interestFactor',
        'employeeID',
        'modifiedDate',
    ];

    public function employee(){
        return $this->belongsTo(employee::class);
    }

    public function loan(){
        return $this->hasMany(loan::class);
    }
}
