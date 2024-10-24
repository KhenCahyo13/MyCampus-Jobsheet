$('#homeCheckPriceBtn').click(function() {
    $('#floorError').text("");
    $('#typeError').text("");
    $('#daysError').text("");

    let floor = $('#floor').val();
    let type = $('#type').val();
    let days = $('#days').val();

    let hasError = false;

    if (!floor) {
        $('#floorError').text("Please select a floor.");
        hasError = true;
    }
    if (!type) {
        $('#typeError').text("Please select a room type.");
        hasError = true;
    }
    if (!days) {
        $('#daysError').text("Please select the number of days.");
        hasError = true;
    }

    if (!hasError) {
        let url = `index.php?page=price-check&floor=${floor}&type=${type}&days=${days}`;
        window.location.href = url;
    }
});