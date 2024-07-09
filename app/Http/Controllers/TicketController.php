<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Enums\TicketStatus;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showStatus()
    {
        $statusMessage = $this->getTicketStatusMessage(TicketStatus::ONGOING);
        return view('ticket.status', ['message' => $statusMessage]);
    }

    private function getTicketStatusMessage(TicketStatus $status): string
    {
        return match ($status) {
            TicketStatus::ONGOING => 'The ticket is ongoing.',
            TicketStatus::FOR_REVIEW => 'The ticket is for review.',
            TicketStatus::FOR_APPROVAL => 'The ticket is for approval.',
            TicketStatus::DONE => 'The ticket is done.',
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
