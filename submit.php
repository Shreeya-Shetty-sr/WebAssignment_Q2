<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname   = htmlspecialchars($_POST['fullname']);
    $fathername = htmlspecialchars($_POST['fathername']);
    $mothername = htmlspecialchars($_POST['mothername']);
    $email      = htmlspecialchars($_POST['email']);
    $phone      = htmlspecialchars($_POST['phone']);
    $gender     = htmlspecialchars($_POST['gender']);
    $course     = htmlspecialchars($_POST['course']);
    $hobbies    = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];

    echo "<h3>✅ Application Submitted Successfully!</h3>";
    echo "<p><strong>Full Name:</strong> $fullname</p>";
    echo "<p><strong>Father Name:</strong> $fathername</p>";
    echo "<p><strong>Mother Name:</strong> $mothername</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Course:</strong> $course</p>";
    echo "<p><strong>Hobbies:</strong> " . implode(", ", $hobbies) . "</p>";
}
?>