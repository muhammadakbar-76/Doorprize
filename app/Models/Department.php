<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';
    protected $primaryKey = 'department_id';

    protected $fillable = [
        'department_name'
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function prize_dept_counters()
    {
        return $this->hasMany(Prize_dept_counter::class);
    }
}
