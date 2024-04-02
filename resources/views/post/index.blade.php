<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Posts</title>
</head>
<body>
    @foreach ($user_posts as $user_post )
        {{$user_post->title}}
        {{$user_post->body}}
        {{$user_post->user->name}}
    @endforeach
</body>
</html>