<?php
    require_once "crud.php";

    $crud = new Crud();

    $id = $_GET['id'];

    $data = $crud->readById($id);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jabatan = $_POST["jabatan"];
        $keterangan = $_POST["keterangan"];
        $crud->update($id, $jabatan, $keterangan);

        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jabatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Jabatan</h2>

        <form method="POST" action="">
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $data['jabatan'] ?>" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $data['keterangan'] ?>" required>
            </div>
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>