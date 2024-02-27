
@include ('components.layout')
<head> <link rel="stylesheet" href="/resources/css/app.css"></head>
<table>
    <tr>
    <th>title</th>
    <th>name</th>
    <th>salary</th>
    </tr>
@foreach ($users as $user)
    <tr>
<td> {{$user->name}}</td>
        <td> {{$user->email}}</td>
        <td> {{$user->salary}}</td>
        </tr>
@endforeach
</table>
