<?php

namespace App\Models\Transportation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resort extends Model
{
    use HasFactory;
    protected $connection= 'transportation';
}
