<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class givenPrevClient extends Model
{
    use HasFactory;

    protected $fillable = [
        'prevClientID',
    ];

    public function client(){
        return $this->belongsTo(client::class);
    }
}
