@extends('admin.admin-layouts.header')
@section('menu-open','menu-open')
@section('active','active')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <div class="container-fluid pt-2">
        <div class="row">
            {{-- {{$errors}} --}}
            <div class="col-12">
                @if (session()->has('pageName'))
                    @if (session('pageName') == "event")
                        <div class="card">
                            <div class="card-body">
                                <form action="/admin/pages-index" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter Event Title">
                                    </div>
                                    <div class="form-group">
                    
                                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                                          <input type="text" class="form-control datetimepicker-input" name="time" placeholder="Pick Time" data-target="#timepicker" data-toggle="datetimepicker">
                                          <div class="input-group-append" data-target="#timepicker" placeholder="Pick Date" data-toggle="datetimepicker">
                                              <div class="input-group-text"><i class="far fa-clock"></i></div>
                                          </div>
                                          </div>
                                        <!-- /.input group -->
                                      </div>
                                      <div class="form-group">
                    
                                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                                           <input type="text" class="form-control" name="date" float-right" id="reservationtime" data-toggle="reservationtime">
                                             <div class="input-group-append" data-target="#reservationtime" placeholder="Pick Date" data-toggle="reservationtime">
                                              <div class="input-group-text"><i class="far fa-clock"></i></div>
                                          </div>
                                          </div>
                                        <!-- /.input group -->
                                      </div>
                                      <div class="form-group text-right">
                                          <button class="btn btn-primary">Add New</button>
                                      </div>
                                </form>
                            </div>
                        </div>
                    @elseif(session('pageName') == "gallery")
                        <div class="card">
                            <div class="card-body">
                              <form action="/admin/pages-gallery" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                      <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" name="carouselMedia" class="custom-file-input" id="validatedCustomFile">
                                            <label class="custom-file-label" for="validatedCustomFile">Choose File For Gallery...</label>
                                            {{$errors->first('carouselMedia')}}
                                        </div>
                                      </div>  
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" name="description" placeholder="Enter Description of Image" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                   <div class="form-group">
                                      <input type="hidden" name="for" value="gallery">
                                      <input type="hidden" name="active" value="2">
                                    </div>
                                        <!-- /.input group -->
                                      </div>
                                      <div class="form-group text-right">
                                          <button class="btn btn-primary">Add New</button>
                                      </div>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="card">
                            <div class="card-body">
                                <form action="/admin/pages-news" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter News Title">
                                    </div>
                                    <div class="form-group">
                    
                                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                                          <input type="text" class="form-control datetimepicker-input" name="time" placeholder="Pick Time" data-target="#timepicker" data-toggle="datetimepicker">
                                          <div class="input-group-append" data-target="#timepicker" placeholder="Pick Date" data-toggle="datetimepicker">
                                              <div class="input-group-text"><i class="far fa-clock"></i></div>
                                          </div>
                                          </div>
                                        <!-- /.input group -->
                                      </div>
                                      <div class="form-group">
                    
                                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                                           <input type="text" class="form-control" name="date" float-right" id="reservationtime" data-toggle="reservationtime">
                                             <div class="input-group-append" data-target="#reservationtime" placeholder="Pick Date" data-toggle="reservationtime">
                                              <div class="input-group-text"><i class="far fa-clock"></i></div>
                                          </div>
                                          </div>
                                        <!-- /.input group -->
                                      </div>
                                      <div class="form-group text-right">
                                          <button class="btn btn-primary">Add New</button>
                                      </div>
                                </form>
                            </div>
                        </div>
                    @endif
                @else

                {{-- <script>window.location = "/admin/pages-index";</script> --}}
                @endif
            </div>
        </div>
    </div>
  </div>
  <!-- /.content-wrapper -->

  
@endsection
@section('js')
    <script>
     $('#timepicker').datetimepicker({
      format: 'LT'
    });
    $('#reservationtime').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    minYear: 1901,
    maxYear: parseInt(moment().format('YYYY'),10)
  });
    </script>
@endsection
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


