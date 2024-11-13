<div class="container-fluid">
    <div class="row">
        <?php
            require 'admin/templates/menu.php';
            $id = $_GET['id'];
            $query = "SELECT * FROM jabatan WHERE id = '$id'";
            $result = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($result);
        ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Jabatan</h1>
            </div>
            <div class="card col-md-6">
                <div class="card-header">
                    Form Edit Jabatan
                </div>
                <form action="functions/edit.php?jabatan=edit" method="POST">
                    <div class="card-body">
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?= $data['jabatan'] ?>"></label>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $data['keterangan'] ?>"></label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="index.php?page=jabatan" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </main>
    </div>
</div>