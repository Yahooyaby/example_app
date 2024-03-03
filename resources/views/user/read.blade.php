<table>
    @foreach ($users as $user)
        <tr>
            <td> <b>{{$user->login}}</b></td>
            <td><form action='{{ route('user.delete', $user->id) }}' method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" VALUE="delete" >
                </form></td>
            <td><form action='{{ route('user.edit', $user->id) }}'>
                    @method('PUT')
                    <input type="submit" VALUE="edit" >
                </form></td>
        </tr>
    @endforeach
        <form action='{{ route('user.create') }}' method="GET">
                <input type="submit" VALUE="new user" >
        </form>
</table>
