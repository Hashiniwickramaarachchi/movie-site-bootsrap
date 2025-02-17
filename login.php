<?php
session_start();
require_once 'db_config.php'; // Include the DB connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the email and password from the form
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Query to fetch the admin with the given email
    $query = "SELECT * FROM admins WHERE email = ?";

    // Prepare the query
    if ($stmt = $conn_cine->prepare($query)) {
        $stmt->bind_param('s', $email);  // Bind the email parameter
        $stmt->execute();
        $result = $stmt->get_result();

        // If a record is found with the email
        if ($result->num_rows > 0) {
            $admin = $result->fetch_assoc();
            $stored_password = $admin['password'];  // Fetch the stored password

            // Check if the entered password matches the stored password
            if ($password === $stored_password) {
                // Password matches, start a session and log the admin in
                $_SESSION['is_admin'] = true;
                $_SESSION['user'] = $admin['name'];  // Store the admin email in session

                // Redirect to the admin dashboard or home page
                header("Location: index.php");
                exit();
            } else {
                // Incorrect password
                header("Location: index.php?error=Invalid credentials");
                exit();
            }
        } else {
            // No admin found with this email
            header("Location: index.php?error=Invalid credentials");
            exit();
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing the statement.";
    }

    // Close the database connection
    $conn_cine->close();
}
?>
