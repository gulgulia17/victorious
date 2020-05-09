@extends('admin.admin-layouts.header')
@section('content')
<div class="container-fluid">

<div class="row">
  @foreach ($all as $key => $media)
  @if ($temp === 'jpg' || $temp === 'png' || $temp === 'jpeg')
  @else
  <div class="col-md-3">
    <div class="card">
      <div class="card-body">
            <video class="w-100 img-thumbnail" src="../{{$media->mediaName}}" muted autoplay loop controls></video>
            <div class="d-flex justify-content-between px-2">
            <form action="/admin/carousel/{{$media->id}}" method="post">
                @csrf @method('PATCH')
                {{-- <p>{{$media->active}}</p> --}}
                <div class="form-group">
                <div class="custom-control custom-switch">
                <input type="checkbox" {{$media->active ? 'checked':''}} class="custom-control-input" id="customSwitch{{$key+1}}" name="active" value="1" onchange="this.form.submit()">
                <label class="custom-control-label" for="customSwitch{{$key+1}}"></label>
                </div>
                </div>
            </form>
            <form action="/admin/carousel/{{$media->id}}" method="post">
                @csrf @method('delete')
                <button class="fas fa-trash text-danger"></button>
            </form>
            </div>
        </div>
    </div>
  </div>
@endif
@endforeach
</div>
<div class="row">
    <div class="col-md-12">
      <form action="/admin/carousel" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="active" value="1">
        <input type="hidden" name="for" value="carousel">
        <div class="input-group mb-3">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="carouselMedia">
            <label class="custom-file-label" for="customFile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Choose file</label>
          </div>
          <div class="input-group-append">
              <button class="btn btn-primary">Add New</button>
          </div>
        </div>
        @error('carouselMedia')
            <div class="text-danger">*{{ $message }}</div>
        @enderror
      </form>
    </div>
  </div>
</div>
@endsection