<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database configuration
    include 'db_connection.php'; // This should contain your database connection code using PDO

    // Retrieve form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $date_added = date('Y-m-d'); // Correct format for MySQL DATE type

    // File upload
    $target_dir = "images/uploads/"; // Specify the directory where you want to store uploaded files
    $target_file = $target_dir . basename($_FILES["image_url"]["name"]);

    // Move uploaded file to the specified directory
    if (move_uploaded_file($_FILES["image_url"]["tmp_name"], $target_file)) {
        // Prepare SQL statement
        $sql = "INSERT INTO resorts (title, description, location, image_url, date_added) 
                VALUES (:title, :description, :location, :image_url, :date_added)";
        
        // Prepare and execute the statement
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':image_url', $target_file);
        $stmt->bindParam(':date_added', $date_added);

        if ($stmt->execute()) {
            header('location: index.php'); // Redirect after successful insertion
            exit(); // Terminate script execution after redirection
        } else {
            echo "Error: " . $sql . "<br>" . $stmt->errorInfo();
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
