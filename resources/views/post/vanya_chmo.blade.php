<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
KVA
<p style="{{$name}}"> current timestamp: {{ time() }} </p>


<?php
	$users = ['Masha','Dasha','Pasha','Slava','Zhenya'];

?>


<select>
@foreach($users as $user)

<option >{{$user}}</option>
    @endforeach
</select>
{{--@unless($age < 18)--}}
{{--    you are a child <br>--}}
{{--@endunless--}}
</body>
</html>


