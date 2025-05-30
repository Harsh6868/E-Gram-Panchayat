<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);

    // Execute the query
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        // User exists, verify password
        $stmt->bind_result($id, $hashedPassword);
        $stmt->fetch();

        if (password_verify($password, $hashedPassword)) {
            echo "Login successful!";
            // Redirect to a protected page
            header("Location: 2index.html");
            exit;
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No account found with that email!";
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>
