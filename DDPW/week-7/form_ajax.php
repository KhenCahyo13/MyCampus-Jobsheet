<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Form dengan PHP dan JQuery</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body>
    <h2>Form Contoh</h2>
    <form id="myForm">
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

    <div id="hasil"></div>

    <script>
        $(document).ready(function() {
            $('#myForm').on('submit', function(e) {
                e.preventDefault();
                let formData = $(this).serialize();
                $.ajax({
                    type: 'POST',
                    url: 'proses_lanjut.php',
                    data: formData,
                    success: function(response) {
                        $('#hasil').html(response);
                    }
                });
            });
        });
    </script>
</body>

</html>