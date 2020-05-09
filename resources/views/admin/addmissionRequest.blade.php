@extends('admin.admin-layouts.header')
@section('content')
    <div class="content-wrapper">
        <div class="content pt-3">
            <div class="card">
                <div class="card-body table-responsive">
                    <table id="myTable" class="table text-center">
                        <thead>
                            <style>
                                label{
                                    text-transform: capitalize
                                }
                            </style>
                            <tr>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Father Name</th>
                                <th>Mother Name</th>
                                <th>Number</th>
                                <th>New Class</th>
                                <th>See More</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allAddmissionRequest as $request)
                            <tr>
                               <td>{{date('d-m-Y',strtotime($request->created_at))}}</td>
                               <td>{{$request->sname}}</td>
                               <td>{{$request->fname}}</td>
                               <td>{{$request->mname}}</td>
                               <td><a href="tel:+91{{$request->mobno}}">{{$request->mobno}}</a></td>
                               <td>{{$request->newclass}}</td>
                               <td><a type="button" data-toggle="modal" data-target="#addmisionModal{{$request->id}}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                            </tr>
                            <div class="modal fade" id="addmisionModal{{$request->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-modal="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Addmission Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body">
                                           <div class="row">
                                               <div class="col-md-4">
                                                <img src="{{Request::root().'/'.$request->stdimage}}" alt="" class="img-fluid">
                                               </div>
                                               <div class="col-md-8">
                                                    <div class="">
                                                        <label>Name :</label>
                                                        <span>{{$request->sname}}</span>
                                                    </div>
                                                    <div class="">
                                                        <label>Father Name :</label>
                                                        <span>{{$request->fname}}</span>
                                                    </div>
                                                    <div class="">
                                                        <label>Mother Name :</label>
                                                        <span>{{$request->mname}}</span>
                                                    </div>
                                                    <div class="">
                                                        <label>DOB :</label>
                                                        <span>{{$request->date}}</span>
                                                    </div>
                                                    <div class="">
                                                        <label>Gender :</label>
                                                        <span>{{$request->gender}}</span>
                                                    </div>
                                               </div>
                                               <div class="col-md-12">
                                                    <label>Address :</label>
                                                    <span>{{$request->add1}}</span>
                                                    <span>{{$request->add2}}</span>
                                                    <span>{{$request->add3}}</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Number :</label>
                                                    <span><a href="tel:+91{{$request->mobno}}">{{$request->mobno}}</a></span>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Email :</label>
                                                    <span><a href="mailto:{{$request->email}}">{{$request->email}}</a></span>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Nationality :</label>
                                                    <span>{{$request->nationality}}</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>religion :</label>
                                                    <span>{{$request->religion}}</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>category :</label>
                                                    <span>{{$request->category}}</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>occupation :</label>
                                                    <span>{{$request->occupation}}</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>New Class :</label>
                                                    <span>{{$request->newclass}}</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Last Passed Class :</label>
                                                    <span>{{$request->lastclass }}</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Last School :</label>
                                                    <span>{{$request->lastschool}}</span>
                                                </div>
                                               
                                           </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="float-right">
                                                <a target="_blank" onclick='window.open("/addmissionform/{{$request->id}}/print", "_blank", "width=500, height=500")' class="btn text-light btn-primary">Print</a>
                                                <button class="btn btn-info">Export</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('bs')
<link rel="stylesheet" href="//cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-html5-1.6.1/b-print-1.6.1/fc-3.3.0/fh-3.1.6/sp-1.0.1/sl-1.3.1/datatables.min.css">
@endsection
@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-html5-1.6.1/b-print-1.6.1/fc-3.3.0/fh-3.1.6/sp-1.0.1/sl-1.3.1/datatables.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
    $('#myTable').DataTable({
        dom: "<'row'<'col-md-4 order-1 button'><'col-md-4 mt-1'l><'col-md-4  mt-1 order-1'f>>" +
        "<'row'<'col-md-12'tr>>" +
        "<'row'<'col-md-6'i><'col-md-6'p>>",
        lengthMenu: [[10,15,25, 100, -1], [10,15,25, 100, "All"]],
        pageLength: 10,
    });
    $('.button').append('<a href="/export" class="btn btn-secondary">Export As Excel</a>');
    $('.button').css('display','flex');
    $('.button').css('justify-content','center');
    $('.button').css('padding-bottom','7px');
    
</script>
@endsection
