<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technology Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .post {
            margin-bottom: 30px;
        }
        .post h2 {
            margin-top: 0;
        }
        .post p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Technology Blog</h1>
        <?php
            // Include the database connection
            include_once 'db_info.php';

            // Fetch posts from the database
            $sql = "SELECT * FROM posts";
            $result = $conn->query($sql);

            // Check if posts were found
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="post">';
                    echo '<h2>' . $row["title"] . '</h2>';
                    echo '<p>' . $row["content"] . '</p>';
                    echo '</div>';
                }
            } else {
                echo "<p>No posts found</p>";
            }

            // Close the database connection
            $conn->close();
        ?>
    </div>
</body>
</html>
