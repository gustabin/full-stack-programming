<?php
// Simulated database
$stock = 5;
if (isset($_GET['product']) && $stock > 0) {
    $stock--;
    echo json_encode(["message" => "Purchase completed successfully. Remaining stock: $stock"]);
} else {
    echo json_encode(["message" => "Out of stock"]);
}
