$(document).ready(function () {
    $('#calculatePriceForm').submit(function (event) {
        event.preventDefault();

        $('#floorError').text("");
        $('#typeError').text("");
        $('#daysError').text("");
        $('#discountError').text("");

        let floor = $('#floor').val();
        let type = $('#type').val();
        let days = $('#days').val();
        let discount = $('#discount').val();

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
        if (!discount) {
            $('#discountError').text("Please select a discount.");
            hasError = true;
        }

        if (!hasError) {
            $.ajax({
                type: 'POST',
                url: './controllers/calculate_price.php',
                data: $(this).serialize(),
                dataType: 'json',
                success: function (response) {
                    $('#floorResult').html(response.data.floor);
                    $('#typeResult').html(response.data.type);
                    $('#daysResult').html(response.data.days + ' day');
                    $('#discountResult').html(response.data.discount);
                    $('#totalPriceResult').html('IDR ' + response.data.totalPrice.toLocaleString('id-ID'));
                    $('#totalPriceWithDiscountResult').html('IDR ' + response.data.totalPriceWithDiscount.toLocaleString('id-ID'));
                    $('#totalPaymentResult').html('IDR ' + (response.data.totalPrice + response.data.totalPriceWithDiscount).toLocaleString('id-ID'));
                },
                error: function () {
                    $('#result').html('Error calculating price.');
                }
            });
        }
    })
});
