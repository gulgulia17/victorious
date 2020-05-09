
<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{$inquiry->sname}} Addmission Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="shortcut icon" href="/images/logo_1.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Courier+Prime&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/css/custom.css">
  <style>
      *{
        font-family: 'Montserrat', sans-serif;
        text-transform: capitalize
      }
 
        .text-reqired{
            font-size: .7em!important;
        }
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

        @media print {
            #schoolName {font-size:40px!important}
            input{
                border-top: none!important;
                border-right: none!important;
                border-left: none!important;
            }
            .card{
                border:none!important
            }
            .main{
                margin-top:1.5rem!important
            }
      }
    </style>
</head>
<body onafterprint="myFunction()">
 
        <section class="main container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <h6>Committed to Excellence in Education Since 1985</h6>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-md-12">
                                <h1 id="schoolName" style="font-size: 50px"><b>Victoria Public School</b></h1>
                                <p>Registered and Affiliated to the Department of Education, Rajasthan <br>Front of Janta Pyau,Outside Ustabari ,Bikaner </p>
                                <h4><b><i>[ENGLISH MEDIUM]</i></b></h4>
                                <p><b>Session :- {{date('Y')}} -  {{date('Y',strtotime('+1 year'))}}</b></p>
                            </div>
                        </div>
                        <form action="/inquiry/store" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="2tro8R66j7eQw0F6HMqyBWxHxsDPEWynhnksEe1e">                        <div class="row">
                            <div class="col-md-5 ml-5 box">
                                <h6 class="text-center mt-1" style="font-size:13px"><b>APPLICATION FORM FOR ADMISSION</b></h6>
                                <p class="mt-5" style="font-size:13px"><b>ADMISSION NO................</b> <b>ADMISSION DATE................</b></p>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-3 imgUp">
                                <img src="{{Request::root().'/'.$inquiry->stdimage}}" alt="{{$inquiry->sname}}" class="img-fluid">
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
                                    <label for="sname">Student Name </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"  value="{{$inquiry->sname}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="fname">Father Name </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="fname" id="fname" class="form-control" placeholder="Father Name" value="{{$inquiry->fname}}">
                                                                    </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="mname">Mother Name </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="mname" id="mname" class="form-control" placeholder="Mother Name" value="{{$inquiry->mname}}">
                                                                    </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="reservationtime">Date of Birth </label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="date" id="reservationtime" data-toggle="reservationtime" value="{{$inquiry->date}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="reservationtime">(In words )</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="date" id="reservationtime" data-toggle="reservationtime" value="{{$inquiry->dobInWords}}
                                            ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="gender">Gender </label>
                                </div>
                                <div class="col-md-9 d-flex">
                                    <input value="{{$inquiry->gender}}" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="address">Full Address </label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="add1" id="add1" class="form-control" placeholder="Address" value="{{$inquiry->add1}}">
                                        <input type="text" name="add2" id="add2" class="form-control" placeholder="House no , Street name" value="{{$inquiry->add2}}">
                                        <input type="text" name="add3" id="add3" class="form-control" placeholder="Locality" value="{{$inquiry->add3}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="mobno">Mobile Number </label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="mobno" id="mobno" class="form-control" placeholder="Mobile Number" value="{{$inquiry->mobno}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-md-0 mt-2">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="email">Email Address </label>
                                        </div>
                                        <div class="col-md-8">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" value="{{$inquiry->email}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="nationality">Nationality </label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="nationality" id="nationality" class="form-control" placeholder="Nationality" value="{{$inquiry->nationality}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-md-0 mt-2">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="religion">Religion </label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="religion" id="religion" class="form-control" placeholder="Religion" value="{{$inquiry->religion}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="category">Category </label>
                                </div>
                                <div class="col-md-9 d-flex">
                                   <input type="text" class="form-control" value="{{$inquiry->category}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="occupation">Occupation </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Occupation" value="{{$inquiry->occupation}}">
                                                                    </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="newclass">Applying for class </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="newclass" id="newclass" placeholder="New Class" value="{{$inquiry->newclass}}">
                                                                    </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="lastclass">Last passed class </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="lastclass" id="lastclass" placeholder="Last Class" value="{{$inquiry->lastclass}}">
                                                                    </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="lastschool">Last school name </label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="lastschool" id="lastschool" placeholder="Last School" value="{{$inquiry->lastschool}}">
                                                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquerykeyframes/0.0.9/jquery.keyframes.min.js"></script>
<script src="/plugins/select2/js/select2.full.min.js"></script>
<script>
    window.print();
  function myFunction(params) {
    setTimeout(function(){
        window.close();
    }, 500);
  }
</script>
</body>
</html>
