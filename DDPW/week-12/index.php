<?php
require_once "crud.php";

$crud = new Crud();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jabatan = $_POST["jabatan"];
    $keterangan = $_POST["keterangan"];
    $crud->create($jabatan, $keterangan);
}

if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];
    $crud->delete($id);
}

$data = $crud->read();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Jabatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahJabatanModal">Tambah Jabatan</button>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jabatan</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $jabatan) {
                ?>
                    <tr>
                        <td><?= $jabatan['id'] ?></td>
                        <td><?= $jabatan['jabatan'] ?></td>
                        <td><?= $jabatan['keterangan'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $jabatan['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="index.php?action=delete&id=<?= $jabatan['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="modal fade" id="tambahJabatanModal" tabindex="-1" aria-labelledby="tambahJabatanModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="tambahJabatanModalLabel">Tambah Jabatan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name="keterangan" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>