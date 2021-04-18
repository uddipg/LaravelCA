<?php

namespace App\Http\Controllers\Guest;

use App\Event;
use App\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreEventsRequest;
use App\Http\Requests\Admin\UpdateEventsRequest;

class EventsController extends Controller
{
    /**
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();

        return view('guest.home', compact('events'));
    }

    /**
     *
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $now = Carbon::now()->toDateString();
       
        $match = [
            ['event_id', '=', $id],
            ['available_from', '<=', $now],
            ['available_to', '>=', $now]
        ];

        
        $tickets = Ticket::where($match)->orderBy('price')->get();

        $event = Event::findOrFail($id);

        return view('guest.events.show', compact('event', 'tickets'));
    }
}
