@extends('admin.admin-layouts.header')
@section('content')
<style>
.custom-file-label::before {
    content: "Browse";
}
.custom-file-label::before {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: 2.25rem;
    padding: .375rem .75rem;
    line-height: 1.5;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-right: inherit;
    border-radius: 0;
}
.custom-file-label::after {
    content: none!important;
}
.fa-trash{
  background: transparent;
  border: none;
  filter: grayscale();
}
.fa-trash:hover,.fa-trash:focus,.fa-trash:active{
  transform: scale(1.2);
  border: none;
  outline: none;
  filter: none;
}
</style>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Carousel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container-fluid">
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
      <div class="d-block">
        <div class="card card-body h3 mb-1">Images</div>
      </div>
      <div class="row">
        @foreach ($all as $key => $media)
        @php $temp = (explode(".",$media->mediaName))[1]; @endphp
        @if ($temp === 'jpg' || $temp === 'png' || $temp === 'jpeg')
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                      <img class="w-100 img-thumbnail" src="../{{$media->mediaName}}" alt="Carousel Slider Image">
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
      <div class="d-block">
        <div class="card card-body h3 mb-1">Videos</div>
      </div>
      <div class="row">
        @foreach ($all as $key => $media)
        @php $temp = (explode(".",$media->mediaName))[1]; @endphp
        @if ($temp === 'mp4')
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
      
      </div>

      
    </div>
  <!-- /.content-wrapper -->

  
@endsection

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


