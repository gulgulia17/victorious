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
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Add Time</div>
                    </div>
                    <div class="card-body">
                        <form action="/admin/pages-timing" method="post">
                            @csrf
                            <div class="form-group">
                                <select class="form-control" name="class">
                                    <option disabled>Select Class</option>
                                    <option value="Play">Play School</option>
                                    <option value="junior">1st To 5th</option> 
                                    <option value="senior">6th to 8th</option>
                                </select>
                            </div>
                            <div class="form-group">
                                {{-- <select class="form-control" name="session">
                                    <option disabled>Session</option>
                                    <option value="Summer">Summer</option>
                                    <option value="Winter">Winter</option>
                                </select> --}}
                              <h4 class="text-center">Summer Timing</h4>
                            </div>
                            <div class="row">
                              <div class="col-6">
                                  <div class="form-group">
                                    <div class="input-group date" id="timepicker1" data-target-input="nearest">
                                      <input type="text" autocomplete="off" class="form-control datetimepicker-input" name="Summerfrom" placeholder="From" data-target="#timepicker1" data-toggle="datetimepicker">
                                      <div class="input-group-append" data-target="#timepicker1" placeholder="Pick Date" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                                      </div>
                                    </div>
                                    <!-- /.input group -->
                                  </div>
                                </div>
                                <div class="col-6">
                                  <div class="form-group">
                                    <div class="input-group date" id="timepicker2" data-target-input="nearest">
                                      <input type="text" autocomplete="off" class="form-control datetimepicker-input" name="Summerto" placeholder="To" data-target="#timepicker2" data-toggle="datetimepicker">
                                      <div class="input-group-append" data-target="#timepicker2" placeholder="Pick Date" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                                      </div>
                                    </div>
                                    <!-- /.input group -->
                                  </div>
                                </div>
                            </div>
                            <div class="form-group">
                            <h4 class="text-center">Winter Timing</h4>
                          </div>
                          <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                  <div class="input-group date" id="timepicker3" data-target-input="nearest">
                                    <input type="text" autocomplete="off" class="form-control datetimepicker-input" name="Winterfrom" placeholder="From" data-target="#timepicker3" data-toggle="datetimepicker">
                                    <div class="input-group-append" data-target="#timepicker3" placeholder="Pick Date" data-toggle="datetimepicker">
                                      <div class="input-group-text"><i class="far fa-clock"></i></div>
                                    </div>
                                  </div>
                                  <!-- /.input group -->
                                </div>
                              </div>
                              <div class="col-6">
                                <div class="form-group">
                                  <div class="input-group date" id="timepicker4" data-target-input="nearest">
                                    <input type="text" autocomplete="off" class="form-control datetimepicker-input" name="Winterto" placeholder="To" data-target="#timepicker4" data-toggle="datetimepicker">
                                    <div class="input-group-append" data-target="#timepicker4" placeholder="Pick Date" data-toggle="datetimepicker">
                                      <div class="input-group-text"><i class="far fa-clock"></i></div>
                                    </div>
                                  </div>
                                  <!-- /.input group -->
                                </div>
                              </div>
                          </div>
                            <div class="form-group text-right">
                                <button class="btn btn-primary">ADD</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Class Name</th>
                                    <th>Summer Timing</th>
                                    <th>Winter Timing</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>              
                                    @if (count($all))
                                        @foreach ($all as $item)
                                        <tr>
                                            <td>{{$item->class}}</td>
                                            <td>{{$item->Summerfrom}}-{{$item->Summerto}}</td>
                                            <td>{{$item->Winterfrom}}-{{$item->Winterto}}</td>
                                            <td class="d-flex">
                                                <span>
                                                    <a href="/admin/pages-timing/{{$item->id}}/edit"><i class="fas fa-edit"></i></a>
                                                </span>
                                                <form action="/admin/pages-timing/{{$item->id}}" method="POST">
                                                    @csrf @method('delete')
                                                    <button class="btn border-0 p-0 ml-1"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @else
                                    <tr>
                                        <td>NOT AVAILABLE</td>
                                        <td>NOT AVAILABLE</td>
                                        <td>NOT AVAILABLE</td>
                                        <td>NOT AVAILABLE</td>
                                    </tr>
                                    @endif
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
    <script>
        $('#timepicker1').datetimepicker({
         format: 'LT'
       });
       $('#timepicker2').datetimepicker({
         format: 'LT'
       });
       $('#timepicker3').datetimepicker({
         format: 'LT'
       });
       $('#timepicker4').datetimepicker({
         format: 'LT'
       });
       
       </script>
@endsection
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


