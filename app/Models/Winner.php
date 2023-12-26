<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    use HasFactory;

    protected $table = 'winners';
    protected $primaryKey = 'winner_id';

    protected $fillable = [
        'employee_name',
        'employee_nik',
        'department_name',
        'lama_kerja',
        'prize_name'
    ];
}
