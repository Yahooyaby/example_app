{{Form::model($user,['route' => ['user.update', $user->id], 'method' => 'PUT'])}}
{{ Form::hidden('id', $user->id) }}
{{ Form::label('login', 'Логин') }}
{{ Form::text('login', $user->login) }}
{{ Form::label('password', 'Пароль') }}
{{ Form::password('password') }}
{{Form::submit('Edit') }}
{{ Form::close() }}
