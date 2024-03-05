<table>
    @foreach ($users as $user)
        <tr>
            <td> <b>{{$user->login}}</b></td>
            <td>
                {{Form::model($user,['route' => ['user.delete', $user->id], 'method' => 'DELETE'])}}
                {{Form::submit('Delete') }}
                {{ Form::close() }}
</td>
{{--            <td><form action='{{ route('user.edit', $user->id) }}'>--}}
{{--                    @method('PUT')--}}
{{--                    <input type="submit" VALUE="edit" >--}}
{{--                </form></td>--}}
            <td>{{Form::model($user,['route' => ['user.edit', $user->id], 'method' => 'GET'])}}
                {{Form::submit('Edit') }}
                {{ Form::close() }}</td>
        </tr>
    @endforeach
        <form action='{{ route('user.create') }}' method="GET">
                <input type="submit" VALUE="new user" >
        </form>
</table>
