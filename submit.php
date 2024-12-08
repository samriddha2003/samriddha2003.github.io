<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $position = htmlspecialchars($_POST['position']);
    $message = htmlspecialchars($_POST['message']);
    
    $resume = $_FILES['resume'];
    $resumeName = $resume['name'];

    // Assuming file upload is successful
    move_uploaded_file($resume['tmp_name'], "uploads/" . $resumeName);

    echo "
        <h2>Application Received!</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Position:</strong> $position</p>
        <p><strong>Message:</strong> $message</p>
        <p><strong>Resume Uploaded:</strong> $resumeName</p>
    ";
} else {
    echo "<p style='color: red;'>Invalid Request</p>";
}
?>