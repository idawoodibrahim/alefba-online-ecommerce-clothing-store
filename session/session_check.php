<?php
# Start the session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

# Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
    
    # Store the current page URL (referrer) in the session to redirect back after login
    $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];  // This captures the current URL
    
    # Redirect to login page
    header("Location: " . APP_URL . "/session/login.php");
    exit;
}