<!DOCTYPE html>
<html>
<head>
<title>Dashboard </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid">
     <div class="row no-gutter">
       <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
         <div class="login d-flex align-items-center py-5">
          <div class="container">
           <div class="row">
             <div class="col-md-9 col-lg-8 mx-auto">
        <h3 class="login-heading mb-4">Welcome!</h3>
    <div class="card">
    <div class="card-body">
Welcome {{ ucfirst(Auth()->user()->name) }}
</div>
<div class="card-body">

<a href="google-bar-chart" class="w3-button w3-black">Dashboard</a>
<i class="fa fa-arrow-right"></i>
    </div>
    </div>
         </div>
        </div>
           </div>
         </div>
        </div>
      </div>
      </div>
    </body>
</html>