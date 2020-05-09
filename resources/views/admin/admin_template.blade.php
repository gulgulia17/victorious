@extends('admin.admin-layouts.header')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    </div>
    <!-- /.content-header -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box bg-info">
            <span class="info-box-icon"><i class="fas fa-photo-video"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Media</span>
            <span class="info-box-number">
              @if (count($allMedia) > 0)
                  {{count($allMedia)}}
              @else
                  {{0}}
              @endif 
            </span>
              <span class="progress-description mt-2">
                Last uploaded on  DATE
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <div class="col-3">
          <div class="card">
            <div class="card-body">
              Why us Image
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <div class="card-body">
              Notice
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <div class="card-body">
              Event form 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
@endsection


