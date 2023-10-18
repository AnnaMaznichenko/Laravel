<html>
<head>
    <title>List of users</title>
</head>
<body>
    <table border="2">
        @foreach($users as $user)
            <tr><td>{{$user->id}}</td><td>{{$user->login}}</td></tr>
        @endforeach
    </table>
</body>
</html>
