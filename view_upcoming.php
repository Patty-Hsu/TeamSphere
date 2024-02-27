<?php
require_once('header.php');

// User authentication check
if (!isset($_SESSION['user'])) {
    header('Location: signin.php'); // Redirect to login page if not authenticated
    exit();
}

$userId = $_SESSION['user']['user_id']; // Make sure 'user_id' exists in the session array
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Upcoming Birthdays</title>
</head>
<body>
    <h2>View Upcoming Birthdays</h2>
    <p>This is where you can view upcoming birthdays.</p>
    <!-- Display upcoming birthdays from database -->
</body>
<?php require_once('footer.php'); ?>
</html>