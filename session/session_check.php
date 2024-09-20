<?php
# Start the session if not already started
ensureSessionStarted();

# Check if the user is not logged in
if (!$USER_LOGGED_IN) {

    # Get the current page URL (without query parameters)
    $current_page = basename($_SERVER['PHP_SELF']);

    # Check if the user is already on the login page
    if ($current_page !== 'login.php') {
        # Store the current page URL (referrer) in the session to redirect back after login
        $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];  // This captures the current URL

        # Redirect to login page only if user is on my-account page
        if ($current_page === 'my-account.php') {
            header("Location: " . APP_URL . "/session/login.php");
            exit;
        }
    }
}