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
    
    <title>My Posts</title>
  <style>
    h1{
        font-size: 2em;
        font-weight: 2px;
    }
  </style>
</head>
<body>
    @include('layouts.navigation')
    <div class="container">
      
        <div class="m-3">
            <h1>My Posts</h1>
            <a href="{{route('post.create')}}" class="btn btn-primary float-end">Post Blog</a>
          <br>
    </div>


       <div>
        @foreach ($user_posts as $user_post )
        <div class="card m-3">
            <div class="card-body">
              <blockquote class="blockquote mb-0">
               <a href="{{route('post.show', $user_post->id)}}">{{$user_post->title}}</a>
               </blockquote>
               <p>Posted at: {{$user_post->created_at->format('M d, Y')}}</p>
               <p>Last Edit: {{$user_post->updated_at}}</p>
            </div>
          </div>
    @endforeach
  </div>
    </div>
   
</body>
</html>