<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app.css">
    <title>Document</title>
</head>

<body>
    <article>
       <h1>
           {{ $post->title }}
       </h1>

        <h4>
           By <a href="/" class="author">{{ $post->user->name }}</a> in <a class="category" href="/categories/{{ $post->category->slug }}">
                {{ $post->category->name }}
            </a>
        </h4>

        <div>
            {{ $post->body }}
        </div>
    </article>

    <br>
    <br>
    <a class="post__a" href="/">
        Go back
    </a>
</body>

</html>
