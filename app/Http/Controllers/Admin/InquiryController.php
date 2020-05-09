<?php

namespace App\Http\Controllers\Admin;

use App\Inquiry;
use App\AddmisionRequest;
use Illuminate\Http\Request;
use App\Mail\InquiryFormMail;
use App\Mail\AddmissionFormMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Exports\AddmissionRequestExport;
use App\Http\Controllers\besController;

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
        $mail = env('OWN_MAIL');
        Mail::to($mail)->send(new InquiryFormMail($data));
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
            "stdimage"      =>  'mimes:png,jpg,jpeg|required|file|max:10000',
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
        $mail = env('OWN_MAIL');
        // Mail::to($mail)->send(new AddmissionFormMail($admissionData));
        $AddmisionRequest = AddmisionRequest::create($admissionData);
        $this->storeImage($AddmisionRequest);
        return back()
                ->with('status','Thankyou will contact you soon.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function showAddmissionRequest()
    {
        
        $allAddmissionRequest = AddmisionRequest::orderBy('id', 'DESC')->get();
        return view('admin.addmissionRequest',compact('allAddmissionRequest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function printAddmissionForm(AddmisionRequest $inquiry)
    {
        $dobInWords = besController::DateOfBirthToWords(preg_replace("(/+)", "-", $inquiry->date));
        $inquiry['dobInWords'] = $dobInWords;
        return view('admin.printAddmissionForm',compact('inquiry'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function export()
    {
        return Excel::download(new AddmissionRequestExport, 'AddmissionRequest.xlsx');
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
    
    protected function storeImage($image)
    {
        $path   = request()->file('stdimage');
        $resize = Image::make($path)->resize(300,400)->encode('jpg');   // returns Intervention\Image\Image
        $hash = md5($resize->__toString());                             // calculate md5 hash of encoded image
        $path = "images/addmission/{$hash}.jpg";                        // use hash as a name
        $resize->save(public_path($path));                              // save it locally to ~/public/images/{$hash}.jpg
        $url = "/" . $path;                                             // $url = "/images/{$hash}.jpg"

        $image->update([
            'stdimage' => $path,
        ]);
        
    }
}