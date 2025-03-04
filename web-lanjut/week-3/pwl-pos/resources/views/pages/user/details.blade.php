<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users Data</title>
</head>
<body>
    <h1>User Details Data</h1>   
    <table border="1" cellpadding="2" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Name</th>
                <th>Level ID</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $user->user_id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->level_id }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>