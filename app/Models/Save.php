<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    use HasFactory;

    protected $fillable =[

        'partner_code',
        'type',
        'contact_number'
        ];
}
