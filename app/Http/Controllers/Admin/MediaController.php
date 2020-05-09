<?php

namespace App\Http\Controllers\Admin;

use App\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class MediaController extends Controller
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
        return redirect('/admin/pages-index')->with('success','Media Uploaded Succesful');
    }

    public function update(Request $request,Media $carousel)
    {
        if ($request->has('active')) {
            $carousel->active = $request->active;
            $carousel->save();
        } else {
            $carousel->active = 0;
            $carousel->save();
        }
        return redirect('/admin/pages-index')->with('success','Updated Successfully');        
    }
    
    public function destroy(Media $carousel)
    {
        $carousel->delete();
        return redirect('/admin/pages-index')->with('success','Deleted Successfully');
    }

    //Gallery 
    public function gallery(Request $request)
    {
        //store 
        $gallery = Media::create($this->validateRequest());
        $this->storeImage($gallery);
        return redirect('/admin/pages-index')->with('success','Gallery Added Succesful');
    }

    public function galleryShow(Media $id)
    {
        return view('/admin/pages/indexPage/editGallery', compact('id'));
    }

    public function galleryUpdate(Request $request, Media $id)
    {
        //update
        $id->update(request()->validate([
            'carouselMedia' => 'mimes:png,jpg,jpeg,mp4|file|max:10000',
            'description'   => '',
        ]));
        return redirect('/admin/pages-index')->with('success', 'Gallery Update Successfully');

    }
    public function galleryDelete(Media $id)
    {
        $id->delete();
        return redirect('/admin/pages-index')->with('success','Deleted Successfully');
    }
    
    
    private function validateRequest()
	{
		return request()->validate([
			'carouselMedia' => 'mimes:png,jpg,jpeg,mp4|required|file|max:10000',
			'active'        => 'integer',
			'for'           => 'string',
			'description'   => '',
		]);
    }
    
    private function storeImage($image)
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
