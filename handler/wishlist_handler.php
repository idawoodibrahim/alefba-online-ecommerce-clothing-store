<?php
include ROOT . '/db/conn.php';

# Start the session if not already started
ensureSessionStarted();

$response = [];

if ($USER_LOGGED_IN) {
    $product_id = $_POST['product_id'];

    // Check if product is already in wishlist
    $query = "SELECT * FROM wishlist WHERE user_id = ? AND product_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ii', $USER_ID, $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Product already in wishlist, remove it
        $query = "DELETE FROM wishlist WHERE user_id = ? AND product_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ii', $USER_ID, $product_id);
        $stmt->execute();

        $response['status'] = 'removed';
    } else {
        // Insert product into wishlist
        $query = "INSERT INTO wishlist (user_id, product_id) VALUES (?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ii', $USER_ID, $product_id);
        $stmt->execute();

        $response['status'] = 'added';
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'User not logged in';
}

echo json_encode($response);