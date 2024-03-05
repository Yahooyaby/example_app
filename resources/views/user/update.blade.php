
<form action='{{ route('user.update', $user->id) }}'  method="POST">
    @csrf
    @method('PUT')
    Change Login <input name="login"><br>
    Change Password <input name="password">

    <input type="submit" VALUE="Update" >
</form>
