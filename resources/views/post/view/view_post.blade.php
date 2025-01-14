<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

       
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{$viewPost->title}}</title>

    <style>
      .title{
        font-size: 2em;
      }
    </style>
</head>
<body>
@include('layouts.navigation')
  
<div class="container my-3">
  <a href="{{route('dashboard')}}" class="btn btn-primary">Go Back</a>
  <div class="">
    <h2 class="title">{{$viewPost->title}}</h2>
  </div>
  <p> By: {{$viewPost->user->name}}</p>
  <div class="m-3">
    <p>{{$viewPost->body}}</p>
  </div>
 
  
  
</div>
  

</body>
</html>