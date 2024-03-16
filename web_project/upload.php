<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
    header("Location: signin.html");
    exit;
}
?>

<html>
<head>
    <title>Youtube</title>
    <link rel="stylesheet" href="home.css">
  
</head>

<body >
    <form action="connection.php" method="POST" enctype="multipart/form-data">
    <div style="height: 800px;margin-top: -25px; width: 1660px;">

        <div id="top_nav" style="border: 2px solid rgb(178, 178, 178);width: 100%;
        height: 70px;margin-left: -4px; padding-top: 30px; padding-left: 20px;">
            <div> <img src="images/menubar.png" style="height: 40px;" class="icon_menu"></div>
            <div> 
                <a href="http://localhost/web_project/dashboard.php">
                 <img src="images/youtube.png" style="height: 60px;" class="icon_yt"> </a>
                </div>
            <div> <label class="text" style="font-size: 30px;">Studio </label></div>
            <div> <input type="search" id="search" placeholder="Search"> </div>
            <div class="search_div"> <img src="images/search.png" class="icon_search"></div>
            <div style="margin-left:170px">
            <a href="http://localhost/web_project/edit.html">
            <img src="images/edit.png" class="icon_live"> </a></div>
            <div><img src="images/grid.png" class="icon_bell"></div>
            <div><img src="images/bell.png" class="icon_bell"></div>
        </div>

        <div id="side_nav" style="width: 200px; margin-top: -22px; 
        border: 2px solid rgb(178, 178, 178);margin-left: -4px;padding-left: 40px;" >
               
               <div style="margin-left:20px;"> 
               <img src="images/user1.png" style="height: 120px; width: 120px;margin-top:20px" class="icon_user"></div>
               <div style="height:30px; width:150px; margin-top:15px;">
              <center> <a href="#" style="font-size:27px" id="signin"><?php echo $_SESSION['name']; ?></a> </center>
               </div>
            <ul style="list-style: none; margin-left: -40px;">
                <li class="list" >  
                    <img src="images/dashboard.png"  class="icons">
                    <label class="lbl">Dashboard</label>  
                 </li>
                 <li  class="list">  
                    <img src="images/content.png" class="icons">
                    <label class="lbl">Content</label>  
                 </li>
                 <li  class="list">  
                    <img src="images/analytics.png" class="icons">
                    <label class="lbl">Analytics</label>  
                 </li> 
                 <li class="list">
                 <img src="images/upload.png" class="icons">
                 <input type="submit" name="uploadpage" value="Upload" style="background:transparent; color:black;
                  width:100px; font-size:18px; border:none; margin-left:0px; height:40px">
                 </li>
                 <li class="list">
                 <img src="images/delete.png" class="icons">
                 <input type="submit" name="deletepage" value="Delete" style="background:transparent; color:black;
                  width:100px; font-size:18px; border:none; margin-left:0px; height:40px">
                 </li>
                 <li  class="list">  
                    <img src="images/magic.png" class="icons">
                    <label class="lbl">Customize</label>  
                 </li>
                 <li class="list">  
                    <img src="images/earn.png" class="icons">
                    <label class="lbl">Earn</label>  
                 </li>
                 <br>
                 <hr style="width: 165px;margin-left: -2px;"> 
                     <li class="list">  
                    <img src="images/setting.png" class="icons">
                    <label class="lbl">Settings</label>  
                 </li> 
                 <li class="list">  
                    <img src="images/help.png" class="icons">
                    <label class="lbl">Help</label>  
                 </li> 
                 <li class="list">  
                    <img src="images/feedback.png" class="icons">
                    <label class="lbl">Feedback</label>  
                 </li> 
                 <li class="list">
                 <img src="images/logout.png" class="icons">
                 <input type="submit" name="logout" value="logout" style="background:transparent; color:black;
                  width:100px; font-size:20px; border:none; height:40px">
                 </li>
            </ul>
        </div>
         
        <div id="video_div">
               
<?php
define('HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'data');
// Establish a database connection (assuming you have a connection already)
$conn = new mysqli(HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Retrieve the video data from the database
$sql = "SELECT * FROM videos ";
$result = mysqli_query($conn, $sql);

// Display the videos
while ($row = mysqli_fetch_assoc($result)) {
    $filePath = $row['file_path'];
    $title = $row['title'];
    $channel = $row['channel_name'];
    $id = $row['id'];




    echo  ' <div style="float: left;">
    <div>
     <video src="' . $filePath . '"  data-name="cwh"  class="video" controls muted >
    </div>
    <div style="float:left; border-radius: 50%; height: 45px; width: 45px; margin-left:65px; margin-top:10px"> 
    <img src="images/user1.png" style="height:100%; width: 100%;margin-top:0px" class="icon_user">
     </div>  
    <div style="margin-top: 20px;">
     <label style="margin-left: 10px;font-size: 20px;font-weight: bold;">' . $title . '</label><br>
     <label style="margin-left: 10px;font-size: 20px;">' . $channel . '</label><br>
     <label style="margin-left: 120px;font-size: 20px;"> id :' . $id . '</label><br>
     <label style="margin-left: 120px;font-size: 20px;">2 views  .......  1 min ago</label>
    </div>
 </div>';
}


// Close the database connection
mysqli_close($conn);
?>
    </div>
        
    </div>
</form>

</body>
</html>
