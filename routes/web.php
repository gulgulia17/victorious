<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','besController@index');
Route::get('/index','besController@index');

Route::get('/index1', function () {
    return view('index1');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admission', function () {
    return view('admission');
});

Route::get('/event','Admin\EventController@show');
Route::get('/notification','Admin\NewsController@show');

Route::get('/principal-vps',function(){
    return view('chairman-bes');
});

Route::get('/inquiry','Admin\InquiryController@index');
Route::post('/index/inquiry','Admin\InquiryController@store');
Route::post('/inquiry/store','Admin\InquiryController@admissionRequest');

// Route::get('/faculty', function(){
//     return view('faculty');
// });

// Route::get('/about-school', function(){
//     return view('about-school');
// });

Route::get('/admission-procedure', function(){
    return view('admission-procedure');
});

Route::get('/dress-code', function(){
    return view('dress_code');
});

Route::get('/timing', function(){
    return view('timing');
});

Route::get('/syllabus', function(){
    return view('syllabus');
});

Route::get('/history', function(){
    return view('history');
});

// Route::get('/welcome', function(){
//     return view('welcome');
// });

Route::get('/visit', function(){
    return view('visit');
});

// Route::get('/fee-structure', function(){
//     return view('fee-structure');
// });


Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
Route::post('/login','Auth\LoginController@login');
Route::post('/password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('/password/reset','Auth\ResetPasswordController@reset')->name('password.update');
Route::get('/password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::get('password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::group(['middleware' => ['web','auth',]],function(){
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register'); 
    Route::post('/register', 'Auth\RegisterController@register');
    Route::post('/logout','Auth\LoginController@logout')->name('logout');
    Route::get('admin', 'Admin\adminIndexController@index');
    Route::get('/home',function(){
        return view('home');
    });

    Route::get('/admin/index',function(){
        return view('admin.admin-index');
    })->name('admin-index');
    
    Route::resource('admin/carousel','Admin\CarouselController');

    #GALLERY
    Route::GET('admin/pages-gallery','Admin\GalleryController@index')->name('pages-gallery.index');
    Route::POST('admin/pages-gallery','Admin\GalleryController@store')->name('pages-gallery.store');
    Route::GET('admin/pages-gallery/create','Admin\GalleryController@create')->name('pages-gallery.create');
    Route::PATCH('admin/pages-gallery/{pages_gallery}','Admin\GalleryController@update')->name('pages-gallery.update');
    Route::GET('admin/pages-gallery/{pages_gallery}','Admin\GalleryController@show')->name('pages-gallery.show');
    Route::DELETE('admin/pages-gallery/{pages_gallery}','Admin\GalleryController@destroy')->name('pages-gallery.destroy');
    Route::GET('admin/pages-gallery/{pages_gallery}/edit','Admin\GalleryController@edit')->name('pages-gallery.edit');
    #EVENT
    Route::post('/admin/pages-index/check','Admin\IndexController@checkpage');
    Route::GET('admin/pages-index','Admin\IndexController@index')->name('pages-index.index');
    Route::GET('admin/pages-index/create','Admin\IndexController@create')->name('pages-index.create');
    Route::POST('admin/pages-index','Admin\IndexController@store')->name('pages-index.store');
    Route::GET('admin/pages-index/{pages_index}','Admin\IndexController@show')->name('pages-index.show');
    Route::DELETE('admin/pages-index/{pages_index}','Admin\IndexController@destroy')->name('pages-index.destroy');
    Route::PATCH('admin/pages-index/{pages_index}','Admin\IndexController@update')->name('pages-index.update');
    Route::GET('admin/pages-index/{pages_index}/edit','Admin\IndexController@edit')->name('pages-index.edit');
    #NEWS
    Route::get('/admin/pages-news/{id}/edit','Admin\NewsController@edit');  
    Route::post('/admin/pages-news','Admin\NewsController@store');
    Route::patch('/admin/pages-news/{id}','Admin\NewsController@update');
    Route::delete('/admin/pages-news/{id}','Admin\NewsController@destroy');

    // Route::get('admin/pages-index/create','PagesController@create')->name('pages-index-create');
    // Route::post('admin/pages-index/create','PagesController@store');
    Route::resource('/admin/pages-timing','Admin\TimingController');
    Route::get('addmision_request','Admin\InquiryController@showAddmissionRequest')->name('addmission.request');
    Route::get('addmissionform/{inquiry}/print','Admin\InquiryController@printAddmissionForm');
    Route::get('addmissionform/{inquiry}/print','Admin\InquiryController@printAddmissionForm');
    Route::get('export','Admin\InquiryController@export');

});

//arjun

Route::get('/L-junior',function(){
    return view('L-junior');
});

Route::get('/L-middle',function(){
    return view('L-middle');
});

Route::get('/L-senior',function(){
    return view('L-senior');
});

 Route::get('/gallery','besController@galleryshow');

    