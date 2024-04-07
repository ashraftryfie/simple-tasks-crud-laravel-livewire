<?php

namespace App\Enums;

enum TaskStatus: string
{
    case COMPLETED = 'Completed';
    case PENDING = 'Pending';
}
