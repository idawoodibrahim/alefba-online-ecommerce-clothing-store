<?php
# Initialize the session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

# Unset all session variables
session_unset();  // This already unsets all session variables

# Destroy the session
session_destroy();

# Redirect to login page
header("Location: " . APP_URL . "/session/login.php");
exit;