<?php
include ROOT . '/db/conn.php';
ensureSessionStarted();

$response = [];

if ($USER_LOGGED_IN) {
    $product_id = $_POST['product_id'];
    $action = $_POST['action']; // Get the action (add or remove)

    if ($action === 'add') {
        // Check if product is already in cart
        $query = "SELECT * FROM cart WHERE user_id = ? AND product_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ii', $USER_ID, $product_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Product already in cart
            $response['status'] = 'exists';
            $response['message'] = 'This product is already in your cart. Go to cart to modify.';
        } else {
            // Insert product into cart
            $query = "INSERT INTO cart (user_id, product_id, qty) VALUES (?, ?, 1)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param('ii', $USER_ID, $product_id);
            $stmt->execute();

            $response['status'] = 'added';
            $response['message'] = 'Product successfully added to cart!';
        }
    } elseif ($action === 'remove') {
        // Remove the product from cart
        $query = "DELETE FROM cart WHERE user_id = ? AND product_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ii', $USER_ID, $product_id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $response['status'] = 'removed';
            $response['message'] = 'Product removed from your cart.';
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Product could not be removed from your cart.';
        }
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'User not logged in';
}

echo json_encode($response);