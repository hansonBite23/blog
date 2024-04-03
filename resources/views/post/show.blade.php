<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$posts->title}}</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

     <!-- Scripts -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    
     <style>
        h1{
            font-size: 2em;
            font-weight: 2px;
        }
      </style>
</head>
<body>
    @include('layouts.navigation')

   <div class="container my-3">
    <div class="content">

<a href="{{route('post.index')}}" class="btn btn-success"> Go Back</a>



        <form action="{{route('post.edit', $posts->id)}}" method="get">
        @csrf
        @method('get')
        <button class="btn btn-primary">Edit</button>
        </form>



        <div class="title my-3">
            <h1>{{$posts->title}}</h1>
            <span> {{$posts->created_at->format('M d, Y')}}</span>
           
        </div>
    
        <div class="content">
            {{$posts->body}}
        </div>
      
       
       </div>
    </div>
   
</body>
</html>


