<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    use HasFactory;

    protected $table = 'prizes';
    protected $primaryKey = 'prize_id';

    public function winners()
    {
        return $this->belongsTo(Winner::class);
    }
}