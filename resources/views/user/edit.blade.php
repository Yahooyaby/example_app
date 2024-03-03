<form action='{{ route('user.update', $user->id) }}'  method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $user->id }}">
    Change Login <input name="login"><br>
    Change Password <input name="password">

    <input type="submit" VALUE="Update" >
</form>
