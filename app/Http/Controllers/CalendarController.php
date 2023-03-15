<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\FICHA;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        $userCount  =  FICHA::where('status_id', '=', auth()->id())
        ->count();

        
        $events = array();
        $bookings = Agenda::all();
        // $bookings->Agenda::where('created_by', '=', auth()->id())
        //  ->get();
         $bookings = Agenda::where('created_by', '=', auth()->id())
         ->get();
        
        foreach($bookings as $booking) {
            $color = null;
            if($booking->title == 'Feriado') {
                $color = '#924ACE';
            }
            if($booking->title == 'Final de Semana') {
                $color = '#68B01A';
            }

            $booking->created_by = auth()->id();


            // $user =  Agenda::where('created_by', '=', auth()->id())
            // ->get();

            $events[] = [
                'id'        => $booking->id,
                'title'     => $booking->title,
                'start'     => $booking->start_date,
                'end'       => $booking->end_date,
                'color'     => $color,
                'criado'    => $bookings

            ];
        }
        return view('calendar.index', ['events'    => $events,
                                       'userCount' => $userCount]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
        ]);
        $user = auth()->id();

        $booking = Agenda::create([
            'title'      => $request->title,
            'start_date' => $request->start_date,
            'end_date'   => $request->end_date,
            'criado'     => $request->$user,
        ]);

        $color = null;

        if($booking->title == 'Aniversário') {
            $color = '#924ACE';
        }

        return response()->json([
            'id' => $booking->id,
            'start' => $booking->start_date,
            'end' => $booking->end_date,
            'title' => $booking->title,
            'color' => $color ? $color: '',

        ]);
    }
    public function update(Request $request ,$id)
    {
        $booking = Agenda::find($id);
        if(! $booking) {
            return response()->json([
                'error' => 'Unable to locate the event'
            ], 404);
        }
        $booking->update([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return response()->json('Event updated');
    }
    public function destroy($id)
    {
        $booking = Agenda::find($id);
        if(! $booking) {
            return response()->json([
                'error' => 'Unable to locate the event'
            ], 404);
        }
        $booking->delete();
        return $id;
    }
}