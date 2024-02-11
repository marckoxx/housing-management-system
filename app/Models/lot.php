<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lot extends Model
{
    use HasFactory;

    protected $fillable = [
        'blockID',
        'lotNo',
        'lotExt',
        'accNo',
        'area',
        'totalLandCost',
        'costPerSqm',
        'dPaymentRate',
        'employeeID',
        'modifiedDate',
    ];

    public function employee(){
        return $this->belongsTo(employee::class);
    }

    public function block(){
        return $this->belongsTo(block::class);
    }
}
