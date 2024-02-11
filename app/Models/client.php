<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;

    protected $fillable = [
        'lastName',
        'firstName',
        'midName',
        'extension',
        'spouseLName',
        'spouseFName',
        'spouseMName',
        'spouseExtension',
        'modifiedDate',
        'employeeID',
        'noOfHousehold',
        'beneficiaryStatus',
        'controlNo',
        'location',
        'barangay',
        'contactNo',
        'remarks',
    ];

    public function employee(){
        return $this->belongsTo(loan::class);
    }

    public function familyMember(){
        return $this->hasMany(familyMember::class);
    }

    public function loan(){
        return $this->hasMany(loan::class);
    }

    public function givenPrevClient(){
        return $this->hasMany(givenPrevClient::class);
    }
}
