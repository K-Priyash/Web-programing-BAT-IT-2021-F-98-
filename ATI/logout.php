<?php
// Start the session
session_start();

// End the session
session_destroy();

// Redirect to login.php
header("Location: login.php");
exit();
?>
