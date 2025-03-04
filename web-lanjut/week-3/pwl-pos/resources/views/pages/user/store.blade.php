<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users Data</title>
</head>
<body>
    <h1>Create a New User</h1>   
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <br><br>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br><br>
        <label for="name">Password</label>
        <input type="password" name="password" id="password">
        <br><br>
        <label for="level_id">Level ID</label>
        <input type="text" name="level_id" id="level_id">
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>