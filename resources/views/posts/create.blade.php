<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h3>Create posts</h3>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <input type="text" name="fld">
        <button type="submit">Создать</button>
    </form>


</body>
</html>