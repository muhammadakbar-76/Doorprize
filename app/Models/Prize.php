<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    use HasFactory;

    protected $table = 'prizes';
    protected $primaryKey = 'prize_id';

    protected $fillable = [
        'prize_name',
        'prize_value',
        'prize_foto',
        'rules_field',
        'rules_operator',
        'rules_value',
    ];

    public function winners()
    {
        return $this->hasMany(Winner::class);
    }
}
