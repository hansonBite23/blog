<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Create Blog</title>
</head>
<body>
    <div class="container">
        <form action="{{route('post.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Body</label>
            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Add Blog</button>
        </form>

    </div>
</body>
</html>