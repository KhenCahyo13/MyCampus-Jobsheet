$(document).ready(function() {
    $('#loginForm').submit(function(event) {
        event.preventDefault();

        $('#usernameError').text("");
        $('#passwordError').text("");

        let username = $('#username').val();
        let password = $('#password').val();

        let hasError = false;

        if (!username) {
            $('#usernameError').text("Please enter your username.");
            hasError = true;
        }
        if (!password) {
            $('#passwordError').text("Please enter your password.");
            hasError = true;
        }

        if (!hasError) {
            $.ajax({
                type: 'POST',
                url: './controllers/login.php',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        window.location.href = "index.php?page=home";
                    } else {
                        if (response.errors.username) {
                            $('#usernameError').text(response.errors.username);
                        }
                        if (response.errors.password) {
                            $('#passwordError').text(response.errors.password);
                        }
                    }
                },
                error: function() {
                    alert('An error occurred while processing your request. Please try again.');
                }
            });
        }
    });
});