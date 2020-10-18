<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public function company()
    {
        // return $this->belongsTo('App\Models\Company');
        return $this->belongsTo('App\Models\Company', 'companies_id');
    }
}
