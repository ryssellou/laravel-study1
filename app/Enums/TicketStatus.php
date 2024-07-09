<?php

namespace App\Enums;

enum TicketStatus: string
{
    case ONGOING = 'ongoing';
    case FOR_REVIEW = 'for review';
    case FOR_APPROVAL = 'for approval';
    case DONE = 'done';
}
