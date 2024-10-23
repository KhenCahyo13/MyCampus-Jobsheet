$(document).ready(function() {
    $('#file').change(function() {
        if (this.files.length > 0) {
            $('#uploadButton').prop('disabled', false).css('opacity', 1);
        } else {
            $('#uploadButton').prop('disabled', true).css('opacity', 0.5);
        }
    });

    $('#uploadForm').submit(function (event) {
        event.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: 'upload.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                $('#status').html(data);
            },
            error: function() {
                $('#status').html('Error uploading file');
            }
        });
    });
});