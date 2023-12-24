 <?php
    include("connection.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve locations from the POST data
        $locations = $_POST['locations'];

        include("connection.php");
        // Use a prepared statement to insert locations into the database
        $stmt = $conn->prepare("INSERT INTO locations (name) VALUES (?)");

        // Check if the statement is prepared successfully

        $stmt->bind_param("s", $locations);
        $stmt->execute();
        header("location:index.php");
    }
    ?>