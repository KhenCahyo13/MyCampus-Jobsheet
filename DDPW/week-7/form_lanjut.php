<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Form dengan PHP</title>
</head>
<body>
    <h2>Form Contoh</h2>
    <form action="proses_lanjut.php" method="POST">
        <label for="buah">Pilih Buah:</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
        </select>

        <br>

        <label for="buah">Pilih Warna Favorit:</label><br>
        <input type="checkbox" name="warna[]" value="merah" id="warna">Merah <br>
        <input type="checkbox" name="warna[]" value="biru" id="warna">Biru <br>

        <br>

        <label for="jenis_kelamin">Pilih Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki" id="jenis_kelamin">Laki-laki <br>
        <input type="radio" name="jenis_kelamin" value="perempuan" id="jenis_kelamin">Perempuan <br>

        <br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>