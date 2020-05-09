<?php

namespace App\Http\Controllers\Admin;

use App\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
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
    public function store(Request $request)
    {

        $media = Media::create($this->validateRequest());
        $this->storeImage($media);
        return redirect('/admin/pages-index')->with('message','Media Uploaded Succesful');
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
    public function edit(Media $pages_gallery)
    {
        $id = $pages_gallery;
        return view('/admin/pages/indexPage/editGallery', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Media $pages_gallery)
    {
        // dd($request);
        // if ($request->has('active')) {
        //     $pages_gallery->active = $request->active;
        //     $pages_gallery->save();
        // } else {
        //     $pages_gallery->active = 0;
        //     $pages_gallery->save();
        // }
        $pages_gallery->update($this->validateRequest());
        if(request()->has('carouselMedia')){
        $this->storeImage($pages_gallery);
        }
        return redirect('/admin/pages-index')->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $pages_gallery)
    {
        $pages_gallery->delete();
        return redirect('/admin/pages-index')->with('message','Deleted Successfully');
    }
    
    private function validateRequest()
	{
		$data = request()->validate([
			'active'        => 'integer',
            'for'           => 'string',
            'description'   => 'required|string',
        ]);
        if(request()->has('carouselMedia')){
            $data['carouselMedia'] = request()->validate([
                'carouselMedia' => 'mimes:png,jpg,jpeg,mp4|required|file|max:10000',
            ])['carouselMedia'];
        return $data;
        }else{
        return $data;
        }
    }
    
    protected function storeImage($image)
    {
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
