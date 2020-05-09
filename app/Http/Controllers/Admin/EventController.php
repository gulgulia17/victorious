<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Event::create($this->validateRequest());
        return redirect('/admin/pages-index')->with('message','Event Created Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //eve for event page
        $eve = Event::all();
        return view('/event', compact('eve'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $id)
    {
        dd($id);
        return view('admin.pages.indexPage.edit',compact('id'))->with('message','Event Updated Succesfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $id)
    {
        $id->update($this->validateRequest());
        return redirect('/admin/pages-index')->with('message','Event Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Event $id)
    {
        $id->delete();
        return redirect('/admin/pages-index')->with('message','Event Deleted Succesfully');
    }

    private function validateRequest ()
    {
        return request()->validate([
            'title'=> 'required|string',
            'date'=> 'required|string',
            'time'=> 'required|string'
        ]);
    }
}
