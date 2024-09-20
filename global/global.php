<?php
// Path from the root directory of server to htdocs/public_html, ONLY USE in includes/require statements of PHP
// Path from the root directory of domain/host/baseURL


/// START GLOBAL VARIABLES ///

// Global variables ROOT & APP_URL for Live Session
// define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '');
// const APP_URL = 'https://alefba.fr';


// Global variables ROOT & APP_URL for Local Session
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/alefba');
const APP_URL = 'http://localhost/alefba';


// Global variable for project name
const P_NAME = 'Alefba'; 

/// END GLOBAL VARIABLES ///





/// START GLOBAL FUNCTIONS ///

// Function to start session if not already started
function ensureSessionStarted() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

/// END GLOBAL FUNCTIONS ///


/// START SESSION RELATED VARIABLES ///

// Ensure session is started
ensureSessionStarted();

// Global session variables
$USER_LOGGED_IN = false;
$USER_ID = '';
$USER_NAME = '';
$USER_EMAIL = '';
$USER_ROLE = '';


// Check if session for user exists
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // if user is logged in
    $USER_LOGGED_IN = true;
    $USER_ID = $_SESSION["id"];
    $USER_NAME = $_SESSION['username'];
    $USER_EMAIL = $_SESSION['email'];
    $USER_ROLE = $_SESSION['role'];
}

/// END SESSION RELATED VARIABLES ///