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
    <article>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
    </article>
    <a href="/">Go Back</a>

</body>

</html>
