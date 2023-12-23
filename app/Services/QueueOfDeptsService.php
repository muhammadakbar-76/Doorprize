<?php

namespace App\Services;

use App\Interfaces\QueueOfDeptsInterface;
use App\Models\Department;

class QueueOfDeptsService implements QueueOfDeptsInterface
{

    private $queue;

    public function init_queue()
    {
        if (empty($this->queue))
            $this->queue = Department::all()->map(fn ($item) => $item->department_name);
    }

    public function shift_push(int $count)
    {
        $dept = $this->queue->shift($count);
        foreach ($dept as $key => $value) {
            $this->queue->push($value);
        }

        return $this;
    }

    public function get_queue()
    {
        if (!empty($this->queue))
            return $this->queue->toArray();
        else
            return $this->queue;
    }
}
