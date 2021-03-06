<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tickets;
use DB;

class TicketsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Tickets::all();
        return view('tickets.index')->with('tickets', $tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'shortname'=>'required',
            'department' => 'required',
            'tel' => ['required', 'digits:10'],
            'name' => 'required',
            'description' => 'required',
        ]);

        $ticket = new Tickets;
        $ticket->shortname = $request->input('shortname');
        $ticket->department = $request->input('department');
        $ticket->tel = $request->input('tel');
        $ticket->name = $request->input('name');
        $ticket->description = $request->input('description');
        // $ticket->created_at = $request->input('created_at');
        $ticket->save();

        return redirect('tickets')->with('success', 'Ticket Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tickets = Tickets::find($id);

        return view('tickets.show')->with('tickets', $tickets);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket = Tickets::find($id);

        return view("tickets.edit")->with('ticket', $ticket);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //THE BELOW IS VALIDATION FOR THE FIELDS
        $this->validate($request, [
            'shortname' => 'required',
            'department' => 'required',
            'tel' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);
        
        $ticket = Tickets::find($id);
        $ticket->shortname = $request->input('shortname');
        $ticket->department = $request->input('department');
        $ticket->tel = $request->input('tel');
        $ticket->name = $request->input('name');
        $ticket->description = $request->input('description');
        // $ticket->created_at = $request->input('created_at');
        $ticket->save();

        return redirect('/tickets')->with('success', 'Ticket Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Tickets::find($id);
        $ticket->delete();
        return redirect('/tickets')->with('success', 'Ticket Deleted');
    }
}
