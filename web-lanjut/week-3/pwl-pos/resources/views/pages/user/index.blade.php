<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users Data</title>
</head>
<body>
    <h1>Users Data</h1>
    <a href="{{ route('user.store-page') }}">Create New User</a> 
    <table border="1" cellpadding="2" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Name</th>
                <th>Level Code</th>
                <th>Level Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->user_id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->level->level_code }}</td>
                    <td>{{ $user->level->level_name }}</td>
                    <td>
                        <form action="{{ route('user.delete', ['id' => $user->user_id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                        <a href="{{ route('user.update-page', ['id' => $user->user_id]) }}">Update</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>