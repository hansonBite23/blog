<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
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
        <form action="{{route('post.update', $edit_post->id) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title" value="{{$edit_post->title}}" required>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Body</label>
                <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3" required>{{$edit_post->body}}</textarea>
              </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
   </div>


    
</body>
</html>