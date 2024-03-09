<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database configuration
    include 'db_connection.php'; // This should contain your database connection code using PDO

    // Retrieve form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $features = $_POST['features'];
    $location = $_POST['location'];
    $area = $_POST['area'];

    // File upload
    $target_dir = "images/uploads/"; // Specify the directory where you want to store uploaded files
    $target_file = $target_dir . basename($_FILES["image_url"]["name"]);

    // Move uploaded file to the specified directory
    if (move_uploaded_file($_FILES["image_url"]["tmp_name"], $target_file)) {
        // Prepare SQL statement
        $sql = "INSERT INTO farms (title, description, features, location, area, image_url) 
                VALUES (:title, :description, :features, :location, :area, :image_url)";
        
        // Prepare and execute the statement
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':features', $features);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':area', $area);
        $stmt->bindParam(':image_url', $target_file);
        
        if ($stmt->execute()) {
            header('location:index.php');
        } else {
            echo "Error: " . $sql . "<br>" . $stmt->errorInfo();
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
