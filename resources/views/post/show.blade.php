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

        <div class="row">
            
        </div>
<a href="{{route('post.index')}}" class="btn btn-success"> Go Back</a>


<div class="row">
    <div class="col-sm-2">
{{-- Edit --}}
<form action="{{route('post.edit', $posts->id)}}" method="get">
    @csrf
    @method('get')
    <button class="btn btn-primary">Edit</button>
    </form>
    </div>
    <div class="col-sm-2">
{{-- Delete --}}

<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal">
   Delete
  </button>
    
    </div>
</div>

<!-- Button to Open the Modal -->

  
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Delete Post</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
            Are you sure you want to delete the post?
               
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
          <form  method="post" >
            @csrf
            @method('delete')
          <button class="btn btn-danger" id="delete-post" type="submit">Yes</button>
        </form>
        </div>
  
      </div>
    </div>
  </div>

        <div class="title my-3">
            <h1>{{$posts->title}}</h1>
            <span> {{$posts->created_at->format('M d, Y')}}</span>
           
        </div>
    
        <div class="content">
            {{$posts->body}}
        </div>
      
       
       </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <script>
$(document).ready(function () {
    
});
   </script>
</body>
</html>


