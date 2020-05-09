<?php

namespace App\Http\Controllers\Admin;

use App\Timing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TimingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Timing::all();
        return view('admin.pages.timing',compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function validateRequest()
    {
        return request()->validate([
        'class' =>'required',
        'Summerfrom' =>'required',
        'Summerto' =>'required', 
        'Winterfrom' =>'required',
        'Winterto' =>'required'  
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Timing::create($this->validateRequest());
        return redirect('/admin/pages-timing')->with('message','Successfully Inserted.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Timing  $timing
     * @return \Illuminate\Http\Response
     */
    public function show(Timing $timing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Timing  $timing
     * @return \Illuminate\Http\Response
     */
    public function edit(Timing $pages_timing)
    {
        return view('admin.pages.schoolTiming.edit',compact('pages_timing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Timing  $timing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timing $pages_timing)
    {
        $pages_timing->update($this->validateRequest());
        return redirect('/admin/pages-timing')->with('message','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Timing  $timing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timing $pages_timing)
    {
        $pages_timing->delete();
        return redirect('/admin/pages-timing')->with('message','Deleted Successfully');
    }
}
