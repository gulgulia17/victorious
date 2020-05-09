<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use App\Media;
class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Media::where('for','carousel')->get();
        return view('admin.carousel',compact('all'));
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

        $media = Media::create($this->validateRequest());
        $this->storeImage($media);
        return redirect('/admin/carousel')->with('success','Media Uploaded Succesful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Media $carousel)
    {
        if ($request->has('active')) {
            $carousel->active = $request->active;
            $carousel->save();
        } else {
            $carousel->active = 0;
            $carousel->save();
        }
        return redirect('/admin/carousel')->with('success','Updated Successfully');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $carousel)
    {
        $carousel->delete();
        return redirect('/admin/carousel')->with('success','Deleted Successfully');
    }
    
    private function validateRequest()
	{
		return request()->validate([
			'carouselMedia' => 'mimes:png,jpg,jpeg,mp4|required|file|max:10000',
			'active'        => 'integer',
			'for'           => 'string',
		]);
    }
    
    private function storeImage($image){
        $image->update([
            'mediaName' => request()->carouselMedia->move("images",time().".".request()->carouselMedia->getClientOriginalExtension()),
        ]);
        if (request()->carouselMedia->getClientOriginalExtension() == 'mp4') {
            
        } else {
            $image = Image::make(public_path('images/'.time().".".request()->carouselMedia->getClientOriginalExtension()))->resize(960,640);
            $image->save();
        }
        
        
        }

}
