<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Models\User;
use App\Notifications\TicketStatusUpdatedNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user    = auth()->user();
        $tickets = $user->isAdmin ? Ticket::latest()->get() : $user->tickets;

        return view('ticket.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ticket.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
        $ticket = new Ticket();
        $ticket->title = $request->input('title');
        $ticket->description = $request->input('description');
        $ticket->user_id = auth()->id();

        if ($request->file('attachment')) {
            $this->storeAttachment($request, $ticket);
        }
        $ticket->save();
        return redirect(route('ticket.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        if (($ticket->user_id != auth()->id()) and  !((auth()->user())->isAdmin)) {
            abort(403, 'This is not your ticket');
        } else
            return view('ticket.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        return view('ticket.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {

        $ticket->update($request->except('attachment'));

        if ($request->has('status')) {
            $user = User::find($ticket->user_id);
            $ticket->user->notify(new TicketStatusUpdatedNotification($ticket));
        }
        if ($request->file('attachment')) {
            if ($ticket->attachment != null)
                Storage::disk('public')->delete($ticket->attachment);
            $this->storeAttachment($request, $ticket);
            $ticket->update(['attachment', $ticket->attchment]);
        }

        return redirect(route('ticket.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {

        $ticket->delete();
        return redirect(route('ticket.index'));
    }
    protected function storeAttachment($request, $ticket)
    {
        $ext = $request->file('attachment')->extension();
        $contents = file_get_contents($request->file('attachment'));
        $filename = Str::random(25);
        $path = "tickets/$filename.$ext";
        Storage::disk('public')->put($path, $contents);
        $ticket->attachment = $path;
    }
}
