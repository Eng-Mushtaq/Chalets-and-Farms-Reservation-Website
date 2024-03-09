<?php
session_start();
// Include your database connection file
include 'db_connection.php'; // Change 'db_connection.php' to the actual name of your database connection script
    // Check if all necessary POST variables are set
    if (isset( $_POST['product_id'], $_POST['type'])) {
        $user_id = $_SESSION['userid']; // Assuming you have a form field named user_id
        $product_id = $_POST['product_id']; // Assuming you have a form field named product_id
        $type = $_POST['type']; // Assuming you have a form field named type
        $date = date('Y-m-d'); // Corrected date format
           // If the product does not exist in the bookings, insert a new row
        $sql = "INSERT INTO bookings (user_id, item_id, item_type, date) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute([$user_id, $product_id, $type, $date])) {
            header('location: success.php?');
            exit; // Ensure script execution stops after redirection
        } else {
            echo "Error inserting data into the bookings table.";
        }
    } else {
        echo "Required POST variables are not set.";
    }

?>
