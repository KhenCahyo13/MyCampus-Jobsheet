<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm">
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <div id="response"></div>

    <script>
        $(document).ready(function() { 
            $('#myForm').submit(function() {
                event.preventDefault();
                let nama = $("#nama").val();
                let email = $("#email").val();
                let password = $("#password").val();
                let valid = true;

                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (password.length < 8) {
                    $("#password-error").text("Password harus minimal 8 karakter");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                if (valid) {
                    let formData = $(this).serialize();
                    $.ajax({
                        url: 'proses_validasi.php',
                        type: 'POST',
                        data: formData,
                        success: function(response) {
                            $("#response").html(response);
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>