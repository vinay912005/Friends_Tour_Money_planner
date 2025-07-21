<?php
$insert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "trip";

    // Create connection with database selected
    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn) {
        die("Connection to this database failed: " . mysqli_connect_error());
    }

    // Capture form values safely
    $name = $_POST['name'] ?? '';
    $usn = $_POST['usn'] ?? '';
    $branch = $_POST['branch'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone_number = $_POST['tel'] ?? '';
    $other = $_POST['desc'] ?? '';

    // Insert query (phone_number column used)
    $sql = "INSERT INTO trip (`name`, `usn`, `branch`, `email`, `phone number`, `other`, `dt`) 
            VALUES ('$name', '$usn', '$branch', '$email', '$phone_number', '$other', current_timestamp())";

    if ($conn->query($sql) === true) {
        $insert = true;
    } else {
        echo "ERROR: $sql <br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Travel Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Sevillana&display=swap" rel="stylesheet">
</head>
<body>
    <img src="PHP_BG.jpg" class="bg" alt="sit">
    <div class="container">
        <h1>Welcome to SIT Coorg Trip form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        
        <?php 
        if ($insert) {
            echo '<p class="submit">Thanks for submitting your form. We are happy to see you joining us for the Coorg trip.</p>';
        }
        ?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
            <input type="text" name="usn" id="usn" placeholder="Enter Your USN" required>
            <input type="text" name="branch" id="branch" placeholder="Enter Your Branch" required>
            <input type="email" name="email" id="email" placeholder="Enter Your Email" required>
            <input type="tel" name="tel" id="tel" placeholder="Enter Your Phone Number" required>
            <textarea name="desc" id="desc" cols="10" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn" type="submit">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>
