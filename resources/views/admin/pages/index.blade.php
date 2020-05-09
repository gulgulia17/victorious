@extends('admin.admin-layouts.header')
@section('menu-open','menu-open')
@section('active','active')
@section('bs')
<style>
body.swal2-toast-shown .swal2-container.swal2-center {
    top: 0!important;
    right: 0!important;
    bottom: unset!important;
    left: 0!important;
    transform: none!important;
}
</style>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-fluid pt-2">
      <div class="row">
        <div class="col-12">
          <div class="card">
            
            <div class="card-header">Add New</div>
            <div class="card-body">
              <form action="/admin/pages-index/check" method="post">
                @csrf
                <div class="input-group mb-3">
                  <select class="custom-select" name="categoryName">
                    <option value="event">Event</option>
                    <option value="news">News</option>
                    <option value="gallery">Gallery</option>
                  </select>
                  <div class="input-group-append"><button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h5 class="h5 mb-0 font-weight-bold text-capitalize">All Event</h5>
            </div>
            <div class="card-body table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Time</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($allEvent as $key => $item)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->time}}</td>
                    <td>{{$item->date}}</td>
                    <td>
                      <div class="d-flex">
                        <a href="/admin/pages-index/{{$item->id}}/edit" class="btn p-0"><i class="fas fa-edit"></i></a>
                        <form action="/admin/pages-index/{{$item->id}} " method="post">
                          @csrf @method('delete')
                          <button class="btn p-0 pl-2"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                      </div>
                    </td>
                  </tr>    
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h5 class="h5 mb-0 font-weight-bold text-capitalize">All News</h5>
            </div>
            <div class="card-body table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Time</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($allNews as $key => $item)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->time}}</td>
                    <td>{{$item->date}}</td>
                    <td>
                      <div class="d-flex">
                        <a href="/admin/pages-news/{{$item->id}}/edit" class="btn p-0"><i class="fas fa-edit"></i></a>
                        <form action="/admin/pages-news/{{$item->id}}" method="post">
                          @csrf @method('delete')
                          <button class="btn p-0 pl-2"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                      </div>
                    </td>
                  </tr>    
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card">  
            <div class="card-header">
              <h5 class="h5 mb-0 font-weight-bold text-capitalize">Gallery</h5>
            </div>
            <div class="card-body table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Action</th>
                    <th>Preview</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($allgallery as $key => $item)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->for}}</td>
                    <td>
                      <div class="d-flex">
                        <a href="/admin/pages-gallery/{{$item->id}}/edit" class="btn p-0"><i class="fas fa-edit"></i></a>
                        <form action="/admin/pages-gallery/{{$item->id}}" method="post">
                          @csrf 
                          @method('delete')
                          <button class="btn p-0 pl-2"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                      </div>
                    </td>
                    <td>
                      <img src="../{{$item->mediaName}}" style="width:70px">
                    </td>
                  </tr>    
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->

  
@endsection
@section('js')
    @if (session('message'))
        <script>
          $(function() {
            const Toast = Swal.mixin({
              toast: true,
              showConfirmButton: false,
              timer:3000
            });
              Toast.fire({
              type: 'success',
              title: "Success,{{session('message')}}"
              })
          });
        </script>
    @endif
@endsection
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->


