<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    use HasFactory;

    protected $table = 'winners';
    protected $primaryKey = 'winner_id';

    public function employees()
    {
        return $this->hasOne(Employee::class, 'id_employee');
    }

    public function prizes()
    {
        return $this->hasMany(Prize::class, 'id_prize');
    }
}
