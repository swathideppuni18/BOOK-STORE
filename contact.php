<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
    exit();
}

$message = []; // Initialize message as an array

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = preg_replace('/[^0-9]/', '', $_POST['number']); // Remove non-numeric characters
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    // Validate phone number (must be exactly 10 digits)
    if (!preg_match('/^\d{10}$/', $number)) {
        $message[] = 'Please enter a valid 10-digit phone number!';
    } else {
        // Check if the message already exists **after validation**
        $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('Query failed');

        if (mysqli_num_rows($select_message) > 0) {
            $message[] = 'Message sent already!';
        } else {
            mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('Query failed');
            $message[] = 'Message sent successfully!';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="heading">
    <h3>Contact Us</h3>
    <p> <a href="home.php">Home</a> / Contact </p>
</div>

<section class="contact">

    <form action="" method="post">
        <h3>Say Something!</h3>
        <input type="text" name="name" required placeholder="Enter your name" class="box">
        <input type="email" name="email" required placeholder="Enter your email" class="box">
        <input type="tel" name="number" required placeholder="Enter your 10-digit phone number" class="box"
            pattern="\d{10}" title="Enter a valid 10-digit phone number">
        <textarea name="message" class="box" placeholder="Enter your message" cols="30" rows="10"></textarea>
        <input type="submit" value="Send Message" name="send" class="btn">
    </form>

    <?php
    // Display messages only if it's an array and not empty
    if (is_array($message) && !empty($message)) {
        foreach ($message as $msg) {
            echo '<p class="message">' . htmlspecialchars($msg) . '</p>';
        }
    }
    ?>

</section>

<?php include 'footer.php'; ?>

<!-- Custom JS file link -->
<script src="js/script.js"></script>

</body>
</html>
