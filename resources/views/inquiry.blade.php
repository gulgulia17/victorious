@extends('layouts.app')
@section('title','Inquiry Form')
@section('bs')
    <style>
        .text-reqired{
            font-size: .7em!important;
        }f
        .box{
            border: 2px solid;
            height: 30px;
            background-color: slategray;
            margin-top: 65px;
        }
        .imagePreview {
            width: 100%;
            height: 180px;
            background-position: center center;
            background:url(http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg);
            background-color:#fff;
            background-size: cover;
            background-repeat:no-repeat;
            display: inline-block;
            box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2);
        }
        .btn-primary{
            display:block;
            border-radius:0px;
            box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
            margin-top:-5px;
        }
        .imgUp{
            margin-bottom:15px; 
        }
        .invalid-feedback{
            display: block;
        }
    </style>
@endsection

@section('content')
    <section class="container-fluid pt-sm-5 pt-0">
        <div class="row pt-sm-5 pt-0">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <h6>Committed to Excellence in Education Since 1985</h6>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-12">
                                <h1 style="font-size: 50px";><b>Victoria Public School</b></h1>
                                <p>Registered and Affiliated to the Department of Education, Rajasthan <br>Front of Janta Pyau,Outside Ustabari ,Bikaner </p>
                                <h4><b><i>[ENGLISH MEDIUM]</i></b></h4>
                                <p><b>Session :- 20___ -  20___</b></p>
                            </div>
                        </div>
                        <form action="/inquiry/store" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                            <div class="col-md-5 ml-5 box">
                                <h6 class="text-center mt-1" style="font-size:13px"><b>APPLICATION FORM FOR ADMISSION</b></h6>
                                <p class="mt-5" style="font-size:13px"><b>ADMISSION NO................</b> <b>ADMISSION DATE................</b></p>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-3 imgUp">
                                <div class="imagePreview"></div>
                                <label class="btn btn-primary">Browse<input type="file" class="uploadFile img" name="stdimage" style="width: 0px;height: 0px;overflow: hidden;"></label value="{{old('')}}">
                                @error('stdimage')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6> <b> Sir, </b></h6>
                                <p><b>I Want to get my son/daughter/ward admitted in your school. His/Her particulars and previous school leaving certificate are appended herewith. 
                                I assure you that he/she Will abide by all the rules & regulations as well as discipline of the institution.</b></p>
                            </div>
                        </div>
                        
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="sname">Student Name <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="sname" id="sname" class="form-control" placeholder="Student Name" value="{{old('sname')}}">
                                    @error('sname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="fname">Father Name <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="fname" id="fname" class="form-control" placeholder="Father Name" value="{{old('fname')}}">
                                    @error('fname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="mname">Mother Name <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="mname" id="mname" class="form-control" placeholder="Mother Name" value="{{old('mname')}}">
                                    @error('mname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="reservationtime">Date of Birth <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="date" id="reservationtime" data-toggle="reservationtime" value="{{old('date')}}">
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="gender">Gender <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-9 d-flex">
                                    <div class="custom-control custom-radio pr-3">
                                        <input class="custom-control-input" type="radio" id="male" value="male" name="gender" {{old('gender') === 'male' ? 'checked' : null}} value="male">
                                        <label for="male" class="custom-control-label">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio pr-3">
                                        <input class="custom-control-input" type="radio" id="female" value="female" name="gender" {{old('gender') === 'female' ? 'checked' : null}} value="female">
                                        <label for="female" class="custom-control-label">Female</label>
                                    </div>
                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="address">Full Address <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="add1" id="add1" class="form-control" placeholder="Address" value="{{old('add1')}}">
                                        @error('add1')
                                          <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="add2" id="add2" class="form-control" placeholder="House no , Street name" value="{{old('add2')}}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="add3" id="add3" class="form-control" placeholder="Locality" value="{{old('add3')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="mobno">Mobile Number <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="mobno" id="mobno" class="form-control" placeholder="Mobile Number" value="{{old('mobno')}}">
                                            @error('mobno')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-md-0 mt-2">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="email">Email Address <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" value="{{old('email')}}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="nationality">Nationality <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="nationality" id="nationality" class="form-control" placeholder="Nationality" value="{{old('nationality')}}">
                                            @error('nationality')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-md-0 mt-2">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="religion">Religion <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="religion" id="religion" class="form-control" placeholder="Religion" value="{{old('religion')}}">
                                            @error('religion')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="category">Category <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-9 d-flex">
                                    <div class="custom-control custom-radio pr-3">
                                        <input class="custom-control-input" type="radio" id="gen" value="gen" name="category" {{old('category') === 'gen' ? 'checked' : null}}>
                                        <label for="gen" class="custom-control-label">Gen</label>
                                    </div>
                                    <div class="custom-control custom-radio pr-3">
                                        <input class="custom-control-input" type="radio" id="obc" value="obc" name="category" {{old('category') === 'obc' ? 'checked' : null}}>
                                        <label for="obc" class="custom-control-label">OBC</label>
                                    </div>
                                    <div class="custom-control custom-radio pr-3">
                                        <input class="custom-control-input" type="radio" id="sc" value="sc" name="category" {{old('category') === 'sc' ? 'checked' : null}}>
                                        <label for="sc" class="custom-control-label">SC</label>
                                    </div>
                                    <div class="custom-control custom-radio pr-3">
                                        <input class="custom-control-input" type="radio" id="st" value="st" name="category" {{old('category') === 'st' ? 'checked' : null}}>
                                        <label for="st" class="custom-control-label">ST</label>
                                    </div>
                                    <div class="custom-control custom-radio pr-3">
                                        <input class="custom-control-input" type="radio" id="other" value="other" name="category" {{old('category') === 'other' ? 'checked' : null}}>
                                        <label for="other" class="custom-control-label">Other</label>
                                    </div>
                                    @error('category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="occupation">Occupation <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Occupation" value="{{old('')}}">
                                    @error('category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="newclass">Applying for class <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="newclass" id="newclass" placeholder="New Class" value="{{old('newclass')}}">
                                    @error('newclass')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="lastclass">Last passed class <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="lastclass" id="lastclass" placeholder="Last Class" value="{{old('lastclass')}}">
                                    @error('lastclass')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="lastschool">Last school name <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="lastschool" id="lastschool" placeholder="Last School" value="{{old('lastschool')}}">
                                    @error('lastschool')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary" style="display:inline-block">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="/plugins/moment/moment.min.js"></script>
    <script src="/plugins/select2/js/select2.full.min.js"></script>
    <script src="/plugins/daterangepicker/daterangepicker.js"></script>
    <script>
        $('select').select2({
        theme: 'bootstrap4',
        });
        $('#reservationtime').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        startDate: '-3d',
        todayHighlight: false, 
        startDate: "01/01/"+parseInt(moment().format('YYYY')-3),
        minYear: parseInt(moment().format('YYYY')-15),
        maxYear: parseInt(moment().format('YYYY')-3)
    });
    </script>
 @if (session('status'))
        <script>
            alert('Thankyou will contact you soon.');
        </script>
    @endif
    <script>
        $(function() {
            $(document).on("change",".uploadFile", function(){
                var uploadFile = $(this);
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return;
        
                if (/^image/.test( files[0].type)){ 
                    var reader = new FileReader(); 
                    reader.readAsDataURL(files[0]); 
                    reader.onloadend = function(){ 
                    uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
                    }
                }
            });
        });
    </script>
@endsection