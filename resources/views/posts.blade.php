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
<<<<<<< HEAD
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


=======
    <article>
        <h1><a href="/posts/first-post"> My first Post</a></h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia accusantium voluptatum culpa non eligendi
            delectus enim quo, nulla consequuntur? Dolores totam ad tenetur autem eaque quidem similique neque earum
            optio dolore! Tenetur nemo, deleniti porro, eos a dolores nesciunt obcaecati perferendis quibusdam eaque
            quis quidem illo sit, magnam dolor tempora.</p>
    </article>
    <article>
        <h1><a href="/posts/second-post"> My Second Post</a></h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia accusantium voluptatum culpa non eligendi
            delectus enim quo, nulla consequuntur? Dolores totam ad tenetur autem eaque quidem similique neque earum
            optio dolore! Tenetur nemo, deleniti porro, eos a dolores nesciunt obcaecati perferendis quibusdam eaque
            quis quidem illo sit, magnam dolor tempora.</p>
    </article>
    <article>
        <h1><a href="/posts/third-post"> My Third Post</a></h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia accusantium voluptatum culpa non eligendi
            delectus enim quo, nulla consequuntur? Dolores totam ad tenetur autem eaque quidem similique neque earum
            optio dolore! Tenetur nemo, deleniti porro, eos a dolores nesciunt obcaecati perferendis quibusdam eaque
            quis quidem illo sit, magnam dolor tempora.</p>
    </article>
>>>>>>> 6c871828bb4af2409565b2b270c4e15cabdf2cdd
</body>

</html>
