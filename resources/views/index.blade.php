@extends('layouts.app')
@section('title','Home')

@section('content')


<div id="vcscarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach ($carousel as $key => $values)
            <li data-target="#vcscarousel" data-slide-to="{{$key}}" class="active"></li>
        @endforeach
    </ol>
    <div class="carousel-inner" role="listbox">
        @foreach ($carousel as $key => $item)
            <div class="carousel-item {{ !$key ? 'active' : null}}">
                <img src="{{asset($item->mediaName)}}" data-src="{{asset($item->mediaName)}}" class="img-fluid">
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#vcscarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#vcscarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<section class="bg-5">
    <div class="container">
        <section class="p-md-5 p-0">
            <div class="row">
                <div class="col-lg-4 col-md-5 pt-25 col-sm-12 text-center">
                    <div class="card rounded-0 bg-property bg-Chairman">
                        <div class="card-body text-light">
                        <div class="text-right text-vcenter">
                            <h5 class="h5">Principal</h5>
                            <h6 class="h6">Narayan Das Vyas</h6>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-12 pt-2 pl-md-5 pl-0 text-md-left text-center pr-0">
                    <div class="border-bottom px-lg-5">
                        <h5 class="font-weight-bold text-theme">Message of The Honorable Principal</h5>
                    </div>
                    <div class="px-lg-5 px-0 py-3">
                        <h6 class="font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores!</h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore sit magnam vero cumque rem quod eos, dolorem reprehenderit aperiam perspiciatis nulla excepturi, ex molestias quibusdam, ad tenetur nesciunt repellendus culpa.
                        </p>
                        <a href="">See More...</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-md-5 p-0">
            <div class="row">
                
                <div class="col-lg-8 col-md-7 col-sm-12 pt-2 pr-md-5 pr-0 order-md-1 order-sm-2 order-2 text-md-left text-center pl-0">
                    <div class="border-bottom">
                        <h5 class="font-weight-bold text-theme">History of Victorious Sr. Sec. School</h5>
                    </div>
                    <div class="py-3">
                        <h6 class="font-weight-bold">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h6>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum quod inventore, ipsam nostrum atque voluptates, commodi repudiandae odio sit fugit, iusto voluptatibus cupiditate unde. Eum ratione inventore ad deleniti vero?
                        </p>
                        <a href="">See More...</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 pt-25 col-sm-12 text-center order-md-2 order-sm-1 order-1">
                    <div class="card rounded-0 bg-property bg-history">
                        <div class="card-body text-light">
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-md-5 p-0">
            <div class="row">
                <div class="col-lg-4 col-md-5 pt-25 col-sm-12 text-center ">
                    <div class="card rounded-0 bg-property bg-why-us">
                        <div class="card-body text-light">
                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-12 pt-2 pl-md-5 pl-0 text-md-left text-center pr-0">
                    <div class="border-bottom px-lg-5">
                        <h5 class="font-weight-bold text-theme">Why us?</h5>
                    </div>
                    <div class="px-lg-5 px-0 py-3">
                        <h6 class="font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores!</h6>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint optio voluptatum suscipit aliquam officia nesciunt dolores dicta iste unde dolore? Modi id veritatis cumque minus quasi temporibus ipsum rerum explicabo?
                        </p>
                        <a href="">See More...</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<section class="bg-3">
    <section class="section-title">
        <h6 class="h1">Our Features</h6>
    </section>
    <div class="container">
        <section class="p-5">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <img src="{{asset('/images/campus.jpg')}}" alt="img-thumbnail" class="img-fluid img-thumbnail">
                            <div class="content">
                                <h6 class="text-center font-weight-bolder py-3 mb-0">Campus and Facilities:</h6>
                                <p class="text-justify mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium corrupti similique, ad quod reprehenderit nisi numquam ex laborum architecto harum rem explicabo quisquam! Corrupti qui maiores odio et, repudiandae harum!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <img src="{{asset('/images/sports.jfif')}}" alt="img-thumbnail" class="img-fluid img-thumbnail">
                            <div class="content">
                                <h6 class="text-center font-weight-bolder py-3 mb-0">Sports and Physical Education:</h6>
                                <p class="text-justify mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium corrupti similique, ad quod reprehenderit nisi numquam ex laborum architecto harum rem explicabo quisquam! Corrupti qui maiores odio et, repudiandae harum!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <img src="{{asset('/images/libraray.jpg')}}" alt="img-thumbnail" class="img-fluid img-thumbnail">
                            <div class="content">
                                <h6 class="text-center font-weight-bolder py-3 mb-0">Library:</h6>
                                <p class="text-justify mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium corrupti similique, ad quod reprehenderit nisi numquam ex laborum architecto harum rem explicabo quisquam! Corrupti qui maiores odio et, repudiandae harum!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="/visit" class="btn btn-primary btn-theme">See More...</a>
                </div>
            </div>
        </section>
    </div>
</section>
@endsection

@section('bs')

<style>
    
</style>
@endsection
@section('js')
<script src="/js/custom.js"></script>
@endsection