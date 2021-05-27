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

    <h1>Все посты</h1>

    <ul>
        <li>
            <a href="{{ route('posts.show', ['post' => 1]) }}">Post 1</a> |
            <a href="{{ route('posts.edit', ['post' => 1]) }}">Edit</a> |
            <form action="{{ route('posts.destroy', ['post' => 1]) }}" method="post" name="frm">
                @csrf
                @method("DELETE")
                <button type="submit">Delete</button>
            </form>
        </li>

        <li>
            <a href="{{ route('posts.show', ['post' => 2]) }}">Post 2</a> |
            <a href="{{ route('posts.edit', ['post' => 2]) }}">Edit</a>
            <form action="{{ route('posts.destroy', ['post' => 2]) }}" method="post" name="frm">
                @csrf
                @method("DELETE")
                <button type="submit">Delete</button>
            </form>
        </li>

        <li>
            <a href="{{ route('posts.show', ['post' => 3]) }}">Post 3</a> |
            <a href="{{ route('posts.edit', ['post' => 3]) }}">Edit</a>
            <form action="{{ route('posts.destroy', ['post' => 3]) }}" method="post" name="frm">
                @csrf
                @method("DELETE")
                <button type="submit">Delete</button>
            </form>
        </li>
    </ul>

</body>
</html>