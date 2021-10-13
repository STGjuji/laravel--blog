<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app.css">
    <title>Document</title>
</head>
    @foreach($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <h4>
                By <a href="/">{{ $post->category->slug }}</a> in <a href="/">{{ $post->category->name }}</a>
            </h4>

            <div>
                {{ $post->excerpt }}
            </div>
            <br>
            <br>
            <a class="post__a" href="/">
                Go back
            </a>
        </article>
    @endforeach
</html>
