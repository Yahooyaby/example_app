<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ФОРМА РЕГИСТРАЦИИ</title>
</head>
<body>
{{Form::open(['route' => ['user.store'], 'method' => 'POST'])}}
{{ Form::label('login', 'Логин') }}
{{ Form::text('login') }}
{{ Form::label('password', 'Пароль') }}
{{ Form::password('password') }}
{{Form::submit('Create') }}
{{ Form::close() }}

</body>
</html>
