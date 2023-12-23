<?php

namespace App\Interfaces;

interface QueueOfDeptsInterface
{
    public function shift_push(int $count);
    public function get_queue();
    public function init_queue();
}
