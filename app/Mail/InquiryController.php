<?php

namespace App\Http\Controllers\Admin;

use App\Inquiry;
use Illuminate\Http\Request;
use App\Mail\InquiryFormMail;
use App\Mail\AddmissionFormMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inquiry');
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

    public function store(Request $request)
    {
        $inquiry = Inquiry::create($this->validateRequest());
        $data = $this->validateRequest();
        Mail::to('gulgulia17@gmail.com')->send(new InquiryFormMail($data));
        return redirect('/');
       
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function admissionRequest(Request $request)
    {
        $admissionData = $request->validate([
            "stdimage"      =>  'required',
            "sname"         =>  'required|string',
            "fname"         =>  'required|string',
            "mname"         =>  'required|string',
            "date"          =>  'required|string',
            "gender"        =>  'required|string',
            "add1"          =>  'required|string',
            "add2"          =>  '',
            "add3"          =>  '',
            "mobno"         =>  'required|string',
            "email"         =>  'required|string',
            "nationality"   =>  'required|string',
            "religion"      =>  'required|string',
            "category"      =>  'required|string',
            "occupation"    =>  'required|string',
            "newclass"      =>  'required|string',
            "lastclass"     =>  'required|string',
            "lastschool"    =>  'required|string',
        ]);
        $response = Mail::to('gulgulia17@gmail.com')->send(new AddmissionFormMail($admissionData));
        dd($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Inquiry $inquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inquiry $inquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inquiry $inquiry)
    {
        //
    }

    protected function validateRequest()
    {
        $data= request()->validate([
            'fathername' => 'required|string',
            'gmail'      => 'required|string',
            'phone'      => 'required|string',
            'year'       => 'required|string',
            'class'      => 'required|string',
         ]);
         return $data;
    }
}
