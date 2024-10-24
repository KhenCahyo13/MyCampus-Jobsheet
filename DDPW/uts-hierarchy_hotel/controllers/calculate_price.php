<?php
$floor = $_POST['floor'];
$type = $_POST['type'];
$days = $_POST['days'];
$discount = $_POST['discount'];
$totalPrice = 0;
$totalPriceWithDiscount = 0;

// Calculate Price Based on Type
switch ($type) {
    case "Standard":
        $totalPrice = $days * 150000;
        break;
    case "Superior":
        $totalPrice = $days * 300000;
        break;
    case "Deluxe":
        $totalPrice = $days * 500000;
        break;
    default:
        break;
}

// Add Additional Price Based on Floor
if ($floor > 5) {
    $totalPrice += 10000;
}

// Calculate Discount
switch ($discount) {
    case "Member":
        $totalPriceWithDiscount = $totalPrice * 0.9;
        break;
    case "Birthday":
        $totalPriceWithDiscount = $totalPrice - 500;
        break;
    case "None":
        break;
    default:
        break;
}

if ($totalPrice < 0 || $totalPriceWithDiscount < 0) {
    $totalPrice = 0;
    $totalPriceWithDiscount = 0;
}

// Send Response
$response = array(
    'success' => true,
    'message' => 'Successfully calculate price.',
    'data' => array(
        'floor' => $floor,
        'type' => $type,
        'days' => $days,
        'discount' => $discount,
        'totalPrice' => $totalPrice,
        'totalPriceWithDiscount' => $totalPriceWithDiscount
    ),
);

header('Content-Type: application/json');

echo json_encode($response);
?>