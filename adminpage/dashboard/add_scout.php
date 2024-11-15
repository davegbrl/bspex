<?php
include('../conn/conn.php'); // Include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $name = $_POST['name'];
    // Retrieve other scout details similarly

    // Insert data into the database
    $sql = "INSERT INTO scouts (name, registered_no, phone, email, education, merit_badges) 
            VALUES ('$name', '00000000', '09939882716', 'Davegabriel@gmail.com', 'Education Details', 'Merit Badges')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Scout added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
