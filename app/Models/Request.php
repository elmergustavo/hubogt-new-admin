<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    protected $table = 'requets';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'company',
        'phone',
    ];
}
