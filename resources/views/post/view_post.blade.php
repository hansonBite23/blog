<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$viewPost->title}}</title>
</head>
<body>
  {{$viewPost->title}}
  {{$viewPost->body}}
  {{$viewPost->user->name}}

</body>
</html>