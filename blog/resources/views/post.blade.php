<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
    <link rel="stylesheet" href="/app.css"></link>
    {{-- <script src="/app.js"></script> --}}
</head>
<body>

    <article>
        <?= $post; ?>
        <br>
        <button><a href="/">Return</a></button>
    </article>
</body>