<?php
session_start();

define('HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'data');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$title = $_POST['title'];
$id = $_POST['id'];
$channel = $_POST['channel'];
$userid = $_POST['userid'];


$conn = new mysqli(HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['register'])) {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "Email already exists!";
    } else {
        $file_name = $_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        $folder = "images/";
        $image = $folder . basename($file_name);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name, email, password, image) VALUES ('$name', '$email', '$hashedPassword', '$image')";
        if ($conn->query($sql) === true) {
            header("Location: http://localhost/web_project/signin.html");
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}  

if (isset($_POST['login'])) {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;
            $_SESSION['loggedIn'] = true;

            header("Location: http://localhost/web_project/dashboard.php");
            exit;
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "Email not found!";
    }
}
if (isset($_POST['upload'])) {
    
    // Check if a file was uploaded without errors
    if(isset($_FILES['videoFile']) && $_FILES['videoFile']['error'] === UPLOAD_ERR_OK) {
        $file = $_FILES['videoFile'];
   
        $destination = 'videos/' . $file['name'];
        move_uploaded_file($file['tmp_name'], $destination);
    
        // Save the file path in the database
        $filePath = $destination;
    
        // Store the file path in the database using SQL
        $sql = "INSERT INTO videos (file_path,channel_name,title,user_id) VALUES ('$filePath','$channel','$title','$userid')";
        mysqli_query($conn, $sql);
    
        header("Location:http://localhost/web_project/upload.php");
    } else {
        echo "Error uploading file.";
    }
}
if (isset($_POST['deletepage'])) {
    header("Location:http://localhost/web_project/delete.html");

}
if (isset($_POST['delete'])) {
    $sql = "Delete from videos where id = '$id' ";
    mysqli_query($conn, $sql);
    header("Location:http://localhost/web_project/upload.php");
}

if (isset($_POST['Update'])) {
    if(isset($_FILES['videoFile']) && $_FILES['videoFile']['error'] === UPLOAD_ERR_OK) {
        $file = $_FILES['videoFile'];
   
    
        // Move the uploaded file to a desired location
        $destination = 'videos/' . $file['name'];
        move_uploaded_file($file['tmp_name'], $destination);
    
        // Save the file path in the database
        $filePath = $destination;
    
        $sql = "Update videos set channel_name = '$channel' , title = '$title' , file_path= '$filePath' where id = '$id' ";
        mysqli_query($conn, $sql);
        header("Location:http://localhost/web_project/upload.php");
    } 
     
}

if (isset($_POST['flutter_dev'])) {
    header("Location:http://localhost/web_project/flutter_channel.php");

}
if (isset($_POST['pak_cricket'])) {
   header("Location:http://localhost/web_project/cricket_channel.php");

}
if (isset($_POST['uploadpage'])) {
    header("Location:http://localhost/web_project/uploadpage.html");
exit;
}
if (isset($_POST['logout'])) {

session_start();

session_unset();

session_destroy();

header("Location:http://localhost/web_project/home.html");
exit;
}

$conn->close();
?>
