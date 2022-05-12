<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananKiloan extends Model
{
    public $table = "layanankiloan";
    use HasFactory;
    protected $guarded = [
        'id',
    ];
}
