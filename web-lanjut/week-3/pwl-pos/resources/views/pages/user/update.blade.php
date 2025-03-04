<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users Data</title>
</head>
<body>
    <h1>Update User</h1>   
    <form action="{{ route('user.update', ['id' => $user->user_id]) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="{{ $user->username }}">
        <br><br>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}">
        <br><br>
        <label for="level_id">Level ID</label>
        <input type="text" name="level_id" id="level_id" value="{{ $user->level_id }}">
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>