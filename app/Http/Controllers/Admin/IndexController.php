<?php

namespace App\Http\Controllers\Admin;

use App\News;
use App\Event;
use App\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $allEvent =   Event::all();
        $allNews =    News::all();
        $allgallery = Media::where('for','gallery')->get();
        return view('admin.pages.index',compact('allEvent','allNews','allgallery'));
    }

    public function checkpage(Request $request)
    {   
        $pageName = $request->categoryName;
        if ($pageName == "event" || $pageName == "news" || $pageName == "gallery") {
            return redirect('/admin/pages-index/create')->with('pageName',$pageName);
        }else{
            dd('500 Server Error');
        }
    }

    public function create(){
        return view('admin.pages.indexPage.create');
    }
    public function store (Request $request){
        Event::create($this->validateRequest());
        return redirect('/admin/pages-index')->with('message','Event Created Succesfully');
    }

    public function edit(Event $pages_index){
        return view('admin.pages.indexPage.editEvent',compact('pages_index'));
    }

    public function update(Request $request, Event $pages_index)
    {
        $pages_index->update($this->validateRequest());
        return redirect('/admin/pages-index')->with('message','Event Updated Succesfully');
    }

    public function destroy(Request $request, Event $pages_index)
    {
        $pages_index->delete();
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