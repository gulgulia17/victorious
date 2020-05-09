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
                <div class="card">
                    <div class="card-header">
                        <span class="card-title text-uppercase font-weight-bold">Update news</span>
                    </div>
                    <div class="card-body">
                        <form action="/admin/pages-news/{{$id->id}}" method="post">
                            @csrf @method('patch')
                            <div class="form-group">
                                <input type="text" name="title" id="title" class="form-control" placeholder="Enter News Title" value="{{$id->title}}">
                            </div>
                            <div class="form-group">
            
                                <div class="input-group date" id="timepicker" data-target-input="nearest">
                                    <input type="text" data-target="#timepicker" data-toggle="datetimepicker" class="form-control datetimepicker-input" name="time" placeholder="Pick Time" value="{{$id->time}}">
                                    <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                                    </div>
                                    </div>
                                <!-- /.input group -->
                                </div>
                                <div class="form-group">
            
                                <div class="input-group date" id="timepicker" data-target-input="nearest">
                                    <input type="text" class="form-control" name="date" float-right placeholder="Pick Date" id="reservationtime" data-toggle="reservationtime" value="{{$id->date}}">
                                        <div class="input-group-append" data-target="#reservationtime" data-toggle="reservationtime">
                                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                                    </div>
                                    </div>
                                <!-- /.input group -->
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                        </form>
                    </div>
                </div>
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


