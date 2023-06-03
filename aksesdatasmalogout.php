<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // Unset and destroy the session
    session_unset();
    session_destroy();
    
    // Redirect to the login page
    header("Location: aksesdatasmalogin.php");
    exit();
} else {
    // If the user is not logged in, redirect to the login page
    header("Location: aksesdatasmalogin.php");
    exit();
}

?>