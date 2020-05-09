@extends('admin.admin-layouts.header')
@section('menu-open','menu-open')
@section('active','active')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-fluid pt-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body row">
                        <div class="col-md-4">
                            <img src="/{{$id->mediaName}}" alt="" width="100%">
                        </div>
                        <div class="col-md-8">
                            <form action="/admin/pages-gallery/{{$id->id}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                <div class="form-group">
                                    <input type="hidden" name="for" id="title" value="{{$id->for}}" class="form-control">
                                    <input type="hidden" name="active" value="2">
                                </div>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" name="carouselMedia" class="custom-file-input" value="{{$id->mediaName}}" id="validatedCustomFile">
                                        <label class="custom-file-label" for="validatedCustomFile">{{$id->mediaName}}</label>
                                    </div>
                                @error('carouselMedia')
                                    <div class="text-danger">*{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="description" placeholder="Enter Description of Image" id="exampleFormControlTextarea1" rows="3">{{$id->description}}</textarea>
                                @error('description')
                                    <div class="text-danger">*{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-primary">Add New</button>
                                </div>
                            </form>
                        </div>
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


