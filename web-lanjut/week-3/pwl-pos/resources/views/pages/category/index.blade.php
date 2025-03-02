<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories Data</title>
</head>
<body>
    <h1>Categories Data</h1>
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <button type="submit">Add New Category</button>
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
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->category_id }}</td>
                    <td>{{ $category->category_code }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>
                        <form action="{{ route('category.delete', ['id' => $category->category_id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                        <form action="{{ route('category.update', ['id' => $category->category_id]) }}" method="POST">
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