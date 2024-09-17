<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body>
<main class="ui segment">
    <form class="ui form" method="post" action="/login">
        @csrf
        <div class="field">
            <label>Email</label>
            <input type="text" name="email" placeholder="">
        </div>
        <div class="field">
            <label>Password</label>
            <input type="password" name="password" placeholder="">
        </div>
        <button class="ui button" type="submit">Login</button>
    </form>
</main>
</body>
</html>
