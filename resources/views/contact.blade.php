<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Контакты</title>
</head>
<body>

    <h1>Контакты</h1>
    <br>
    <br>

    <form name="formcontact" method="post">
        @csrf
        <input type="text" name="namecontact" placeholder="Имя">
        <br>
        <input type="email" name="emailcontact" placeholder="email">
        <br>
        <button type="submit" name="sendbtn">SEND</button>
    </form>

</body>
</html>