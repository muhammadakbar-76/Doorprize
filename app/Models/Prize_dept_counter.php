<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prize_dept_counter extends Model
{
    use HasFactory;

    protected $table = 'prize_dept_counters';

    protected $fillable = [
        'id_prize',
        'id_department'
    ];

    public function departments()
    {
        return $this->belongsTo(Department::class, 'id_department');
    }

    public function prizes()
    {
        return $this->belongsTo(Prize::class, 'id_prize');
    }
}
