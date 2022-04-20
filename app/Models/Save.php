<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    use HasFactory;

    protected $fillable =[

        'partner_code',
        'partner_name',
        'type',
        'contact_number',
         'submitted_at'
        ];
}
