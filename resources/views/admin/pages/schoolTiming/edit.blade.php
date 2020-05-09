@extends('admin.admin-layouts.header')
@section('menu-open','menu-open')
@section('active','active')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-fluid pt-2">
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Time</div>
                </div>
                <div class="card-body">
                    <form action="/admin/pages-timing/{{$pages_timing->id}}" method="post">
                        @csrf @method('patch')
                        <div class="form-group">
                            <select class="form-control" name="class">
                                <option disabled>Select Class</option>
                                <option value="Play"   {{$pages_timing->class === 'Play'   ? 'selected' : ''}}>Play School</option>
                                <option value="junior" {{$pages_timing->class === 'junior' ? 'selected' : ''}}>1st To 5th</option> 
                                <option value="senior" {{$pages_timing->class === 'senior' ? 'selected' : ''}}>6th to 8th</option>
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
                                <input type="text" autocomplete="off" class="form-control datetimepicker-input" value="{{$pages_timing->Summerfrom}}" name="Summerfrom" placeholder="From" data-target="#timepicker1" data-toggle="datetimepicker">
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
                                  <input type="text" autocomplete="off" class="form-control datetimepicker-input" value="{{$pages_timing->Summerto}}" name="Summerto" placeholder="To" data-target="#timepicker2" data-toggle="datetimepicker">
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
                                <input type="text" autocomplete="off" class="form-control datetimepicker-input" value="{{$pages_timing->Winterfrom}}" name="Winterfrom" placeholder="From" data-target="#timepicker3" data-toggle="datetimepicker">
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
                                <input type="text" autocomplete="off" class="form-control datetimepicker-input" value="{{$pages_timing->Winterto}}" name="Winterto" placeholder="To" data-target="#timepicker4" data-toggle="datetimepicker">
                                <div class="input-group-append" data-target="#timepicker4" placeholder="Pick Date" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="far fa-clock"></i></div>
                                </div>
                              </div>
                              <!-- /.input group -->
                            </div>
                          </div>
                      </div>
                        <div class="form-group text-right">
                            <button class="btn btn-primary">UPDATE</button>
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
     $('#SummerTiming').datetimepicker({
      format: 'LT'
    });
    $('#WinterTiming').datetimepicker({
      format: 'LT'
    });
    </script>
@endsection
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


