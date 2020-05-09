<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title') | Victorious Sr. Sec. School</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:site_name" content="Victorious Sr. Sec. School">
  <meta property="og:title" content="Victorious Sr. Sec. School" />
  <meta property="og:description" 
    content="Victorious Sr. Sec. School Aims at the development &
    growth of various aspects of a student's character." 
  />
  <meta property="og:image" itemprop="image" content="/images/logo.png">
  <meta property="og:type" content="website" />
  <meta name="msapplication-TileColor" content="#343a40">
  <meta name="msapplication-TileImage" content="/images/logo.png">
  <meta name="theme-color" content="#343a40">
  
  <link rel="apple-touch-icon" sizes="57x57" href="/images/logo.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/images/logo.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/images/logo.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/images/logo.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/images/logo.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/images/logo.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/images/logo.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/images/logo.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/images/logo.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/images/logo.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/images/logo.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/images/logo.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/images/logo.png">
  
  <link rel="shortcut icon" href="/images/logo.ico" type="image/x-icon" />

  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Courier+Prime&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/css/custom.css">
  <style>
      *{
        font-family: 'Montserrat', sans-serif;
      }
  </style>
@yield('bs')
</head>
<body>
  <div class="container-fluid">
    <div class="row" style="color: #7bb0d6;
    background-color: #004677;">
        <div class="col-sm-9 text-capitalize p-3 mx-auto">
            <span class="font-weight-bold" id="head-title">school for pre-kindergarten through eighth grade</span>
        </div>
    </div>
</div>
  <nav class="navbar navbar-custom navbar-expand-lg navbar-light px-sm-9 py-sm-3 p-3" style="background-color: rgba(0, 48, 87, 0.7)">
    <a class="navbar-brand w-75 w-md-100" href="/">
    <img src="{{asset('/images/vps.png')}}" class="w-10" alt="School Logo">
        <span class="pos-t-4 pl-2 display-5">Victorious Sr. Sec. School</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto display-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ABOUT
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a href="/principal-vps" class="dropdown-item">Principal</a>
                <a href="/history" class="dropdown-item">History Of BES</a>
                <a class="dropdown-item" href="/about">Why us?</a>
                <!--<a href="/faculty" class="dropdown-item">Teachers & Staff</a>-->
                <!--<a class="dropdown-item" href="/about-school">About Our School</a>-->
              </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ADMISSION
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- 07 0<a class="dropdown-item" href="/welcome">Welcome</a> -->
                <a class="dropdown-item" href="/visit">Features</a>
                <!-- <a class="dropdown-item" href="/fee-structure">Fee Structure</a> -->
                <a class="dropdown-item" href="/inquiry">Admission Form</a>
                <a href="/admission-procedure" class="dropdown-item">Admission Procedure</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                LEARNING
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/L-junior">Nursery To UKG</a>
                <a class="dropdown-item" href="/L-middle">Class 1 <sup>ST</sup> 5 <sup>TH</sup></a>
                <a class="dropdown-item" href="/L-senior">Class 6 <sup>TH</sup> 8 <sup>TH</sup></a>
            </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              EXTRA
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/dress-code">Dress Code</a>
              <a class="dropdown-item" href="/timing">Timing</a>
              <!--<a class="dropdown-item" href="/syllabus">Syllabus</a>-->
          </div>
      </li>
    </ul>
    </div>
</nav>
    @yield('content')
    <section style="background:#004677!important" class="">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 text-md-left text-center" style="padding-bottom: 3.5rem !important;">
            <div class="row">
              <div class="col-12">
                <ul class="list-group">
                  <li class="list-group-item h1 pb-0 mb-0 text-uppercase">About</li>
                  <div class="border-bottom mr-md-auto mx-auto ml-md-3" style="width:8rem;"></div>
                  <a href="/principal-vps" class="list-group-item a">Principal</a>
                  <a href="/history" class="list-group-item a">History Of VCS</a>
                  <a href="/about" class="list-group-item a">Why us?</a>
                  <!--<a href="/faculty" class="list-group-item a">Teachers & Staff</a>-->
                </ul>
              </div>
              <div class="col-12">
                <ul class="list-group">
                  <li class="list-group-item h1 pb-0 mb-0 text-uppercase">Admission</li>
                  <div class="border-bottom mr-md-auto mx-auto ml-md-3" style="width:10rem;"></div>
                  <a href="/visit" class="list-group-item a">Visit</a>
                  <a href="/admission-procedure" class="list-group-item a">Admission Procedure</a>
                  <!-- <a href="/fee-structure" class="list-group-item a">Fee Structure</a> -->
                  <!--<a href="/inquiry" class="list-group-item a">Inquiry Form</a>-->
                </ul>
              </div>
            </div>
            
          </div>
          <div class="col-md-4 pt-1 text-center" style="padding-bottom: 1.5rem!important;padding-top: 2.25rem !important; background:rgba(0, 48, 87, 0.7)">
            <ul class="list-group p">
              <li class="list-group-item">
                <img src="/images/vps.png" class="w-25" alt="School Logo">
              </li>
              <li class="list-group-item" style="padding-top: 3rem;">Victorious Sr. Sec. School</li>
              <div>
              <li class="list-group-item">Front of Janta Pyau,Outside the Ustabari,<br>Sri Ramsar, Road,<br>Bikaner, Rajasthan<br>334001</li>
              <li class="list-group-item">9829590091, 8107577779</li>
              <li class="list-group-item"><a href="mailto:basicenglishschool1985@gmail.com" id="mail">basicenglishschool1985@gmail.com</a></li>
              </div>
            </ul>
          </div>
          <div class="col-md-4 text-md-right text-center" style="padding-bottom: 3.5rem !important;">
            <div class="row">
              <div class="col-12">
                <ul class="list-group">
                  <li class="list-group-item h1 pb-0 mb-0 text-uppercase">Other</li>
                  <div class="border-bottom ml-md-auto mx-auto mr-md-3" style="width:8rem;"></div>
                  <a href="/gallery" class="list-group-item a">Gallery</a>
                  <a href="/visit" class="list-group-item a">Features</a>
                  <a href="/" class="list-group-item a"></a>
                </ul>
              </div>
              <div class="col-12">
                <ul class="list-group">
                  <li class="list-group-item h1 pb-0 mb-0 text-uppercase">Extras</li>
                  <div class="border-bottom ml-md-auto mx-auto mr-md-3" style="width:8rem;"></div>
                  <a href="/dress-code" class="list-group-item a">Dress Code</a>
                  <a href="/timing" class="list-group-item a">Timing</a>
                  <!--<a href="/syllabus" class="list-group-item a">Syllabus</a>-->
                </ul>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </section>
    <div class="container-fluid px-4 pt-4 pb-0" style="color: #7bb0d6;
    background-color: #222;">
      <div class="row">
        <div class="col-12 text-center">
          <p class="text-white float-left">Copyright © Victorious Sr. Sec. School. All rights reserved.</p>
          <a href="https://www.itplus.co.in/" class="float-md-right text-white" target="_blank">Powered by IT Plus </a>
        </div>
      </div>
    </div>
<script src="/js/app.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquerykeyframes/0.0.9/jquery.keyframes.min.js"></script>
<script src="/plugins/select2/js/select2.full.min.js"></script>
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 75 || document.documentElement.scrollTop > 75) {
        $('.navbar').removeClass('px-sm-9 py-sm-3 p-3 navbar-custom');
        $('.navbar').addClass('p-cstm fixed-top');
        $('.navbar').css('padding-right','0');
        $('.main').removeClass('mt-7');
        $('.main').addClass('mt-9');
    } else {
        $('.navbar').addClass('px-sm-9 py-sm-3 p-3 navbar-custom');
        $('.navbar').removeClass('p-cstm fixed-top');
        $('.main').addClass('mt-7');
        $('.main').removeClass('mt-9');
    }
}
</script>
@yield('js')
</body>
</html>
