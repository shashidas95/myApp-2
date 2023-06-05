<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
    <style>
        body {
            max-width: 900px;
            margin: auto;
        }
    </style>
</head>

<body>
  @if (!empty($posts))
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->id }}">
                    {{ $post->title }}
                </a>
            </h1>
            <div>
                <p>{{ $post->excerpt }}</p>
            </div>
            <div>
                <p>{{ $post->body }}</p>
            </div>
        </article>
    @endforeach
@else
    <p>No posts found.</p>
@endif


</body>

</html>
