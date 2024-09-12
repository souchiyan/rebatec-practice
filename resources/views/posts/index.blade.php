<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
    <h1>Blog Name</h1>
    <div class="posts">
        <div class="post">

            @foreach ($posts as $post)
                <h2 class="title">{{$post->title}}</h2>
                <p class="body">{{$post->body}}</p>


            @endforeach
        </div>


    </div>

    </div>
</body>

</html>