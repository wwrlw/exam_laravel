<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Use_table extends Model
{
    use HasFactory;

    protected $fillable = [
        'thing_id',
        'place_id', 
        'user_id', 
        'amount' 
    ];
    
    protected $table = 'Uses';
}
