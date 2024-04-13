<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Pet One Health - Veterinary Center</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Pet One</span>-Health</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">

            @if(Route::has('login'))

            @auth

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{url('dashboard')}}">Home</a>
            </li>

            <x-app-layout>
            </x-app-layout>

            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth

            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>



<div align="center" style="padding:70px;">

        @if(session()->has('message'))

        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{session()->get('message')}}
        </div>

        @endif

    <table>
        <tr style ="background-color:#ECECEC;">
            <th style="padding:10px; font-size:20px; color:black">Doctor Name</th>
            <th style="padding:10px; font-size:20px; color:black">Date</th>
            <th style="padding:10px; font-size:20px; color:black">Message</th>
            <th style="padding:10px; font-size:20px; color:black">Status</th>
            <th style="padding:10px; font-size:20px; color:black">Cancel Appointment</th>
        </tr>

        @foreach ($appoint as $appoints)

        <tr style ="background-color:#ECECEC;" align="center">
            <td style="padding:10px; color:black">{{$appoints->doctor}}</td>
            <td style="padding:10px; color:black">{{$appoints->date}}</td>
            <td style="padding:10px; color:black">{{$appoints->message}}</td>
            <td style="padding:10px; color:black">{{$appoints->status}}</td>
            <td><a class="btn btn-danger ml-lg-3" style="margin-bottom:10px; margin-top:10px" onclick="return confirm('Are you confirm an appointment canceling?')"href="{{url('cancel_appoint', $appoints->id)}}" >Cancel</a></td>
        </tr>

        @endforeach
    </table>
</div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>