<table>
    @foreach ($users as $user)
        <tr>
            <td> <b>{{$user->login}}</b></td>
            <td><a href="{{ route('user.delete', $user->id) }}">Delete</a></td>
            <td><a href="{{ route('user.update', $user->id) }}">Update</a></td>
        </tr>
    @endforeach
</table>
