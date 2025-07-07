<?php
// Check if search parameters are set
if (isset($_GET['title']) || isset($_GET['location'])) {
    // Sanitize user input to prevent SQL injection
    $company_name = isset($_GET['title']) ? "%" . trim($_GET['title']) . "%" : "";
    $town = isset($_GET['location']) ? "%" . trim($_GET['location']) . "%" : "";

    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "job");

    

    // Prepare the SQL query
    $sql = "SELECT title, town,  FROM job_application WHERE title LIKE ? AND town LIKE ?";
    $stmt = $conn->prepare($sql);

    // Bind parameters (company_name, town, country)
    $stmt->bind_param("ss", $company_name, $town);

    // Execute the query
    $stmt->execute();
    $result = $stmt->get_result();

    // Display results
    if ($result->num_rows > 0) {
        echo "<h2>Search Results:</h2>";
        while ($row = $result->fetch_assoc()) {
            echo "<p><strong>" . htmlspecialchars($row['title']) . "</strong> - " . htmlspecialchars($row['town']) . ", "  ."</p>";
        }
    } else {
        echo "<p>No companies found matching your criteria.</p>";
    }

    // Close the statement and the connection
    $stmt->close();
    $conn->close();
}
?>