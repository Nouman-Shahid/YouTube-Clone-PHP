<?php
define('HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'data');

// Establish a database connection
$conn = mysqli_connect(HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['upload'])) {
    $file_name = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];
    $folder = "images/";
    $image = $folder . basename($file_name);
    $sql = "INSERT INTO imagefile (image) VALUES ('$image')";
    mysqli_query($conn, $sql);
} else {
    echo 'error';
}

// Display uploaded images
$query = "SELECT * FROM imagefile";
$result = mysqli_query($conn, $query);

while ($data = mysqli_fetch_assoc($result)) {
    echo '<img src="' . $data['image'] . '">';
}
?>
