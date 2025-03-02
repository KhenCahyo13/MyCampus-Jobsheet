<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Levels Data</title>
</head>
<body>
    <h1>Customer Levels Data</h1>
    <form action="{{ route('level.store') }}" method="POST">
        @csrf
        <button type="submit">Add New Level</button>
    </form>    
    <table border="1" cellpadding="2" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($levels as $level)
                <tr>
                    <td>{{ $level->level_id }}</td>
                    <td>{{ $level->level_code }}</td>
                    <td>{{ $level->level_name }}</td>
                    <td>
                        <form action="{{ route('level.delete', ['id' => $level->level_id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                        <form action="{{ route('level.update', ['id' => $level->level_id]) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <button type="submit">Update</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>