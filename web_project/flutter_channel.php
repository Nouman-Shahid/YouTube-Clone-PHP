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
            <div> <label class="text" style="font-size: 30px;">Youtube </label></div>
            <div> <input type="search" id="search" placeholder="Search"> </div>
            <div class="search_div"> <img src="images/search.png" class="icon_search"></div>
            <div style="margin-left:140px">
            <a href="http://localhost/web_project/edit.html">
            <img src="images/bell.png" class="icon_live"> </a></div>
            <div style="margin-left:20px"> <img src="images/user1.png" class="icon_user"></div>
          
            <div style="margin-top: 15px; margin-left: 5px;"><a id="signin"><?php echo $_SESSION['name']; ?></a></div>
        </div>

        <div id="side_nav" style="width: 200px; margin-top: -22px; 
        border: 2px solid rgb(178, 178, 178);margin-left: -4px;padding-left: 40px;" >
               
               <div style="margin-left:20px;"> 
               <img src="images/flutterdev.png" style="height: 120px; width: 120px;margin-top:20px" class="icon_user"></div>
               <div style="height:30px; width:150px; margin-top:15px;">
              <center> <a href="#" style="font-size:27px" id="signin">Flutter Dev</a> </center>
               </div>
            <ul style="list-style: none; margin-left: -40px;">
            <li class="home_list" >  
                    <img src="images/home.png"  class="icons">
                    <label class="lbl">Home</label>  
                 </li>
                <li class="list" >  
                    <img src="images/dashboard.png"  class="icons">
                    <label class="lbl">Dashboard</label>  
                 </li>
                 <li class="list" >  
                    <img src="images/upload.png"  class="icons">
                    <label class="lbl">Channels</label>  
                 </li>
                 <li  class="list">  
                    <img src="images/content.png" class="icons">
                    <label class="lbl">Playlist</label>  
                 </li>
                 <li  class="list">  
                    <img src="images/analytics.png" class="icons">
                    <label class="lbl">About</label>  
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

<div style="float: left;">
    <div>
     <video src="videos/flutter.mp4" poster="images/programming.jpeg" class="video" controls muted >
    </div>
    <div style="float: left;">
     <img src="images/flutterdev.png" class="icon_user" style="margin-left: 60px; margin-top: 15px;">
    </div>
    <div style="margin-top: 20px;">
     <label style="margin-left: 10px;font-size: 20px;font-weight: bold;">Introduction to Dart Language</label><br>
     <label style="margin-left: 10px;font-size: 20px;">Flutter Dev </label><br>
     <label style="margin-left: 110px;font-size: 20px;">106k views ....  2 days ago</label>
    </div>
 </div>
 <div style="float: left;">
    <div>
     <video src="videos/flutter.mp4" class="video" poster="images/flutter12.jpeg" controls muted >
    </div>
    <div style="float: left;">
     <img src="images/flutterdev.png" class="icon_user" style="margin-left: 60px; margin-top: 15px;">
    </div>
    <div style="margin-top: 20px;">
     <label style="margin-left: 10px;font-size: 20px;font-weight: bold;">Basics of Flutter | Complete Tutorial </label><br>
     <label style="margin-left: 10px;font-size: 20px;">Flutter dev</label><br>
     <label style="margin-left: 110px;font-size: 20px;"> 235k views ....  3 week ago</label>
    </div>
 </div>
 <div style="float: left;">
    <div>
     <video src="videos/flutter.mp4"  class="video" controls muted >
    </div>
    <div style="float: left;">
     <img src="images/flutterdev.png" class="icon_user" style="margin-left: 60px; margin-top: 15px;">
    </div>
    <div style="margin-top: 20px;">
     <label style="margin-left: 10px;font-size: 20px;font-weight: bold;">FireBase connection in Flutter </label><br>
     <label style="margin-left: 10px;font-size: 20px;">Flutter Dev</label><br>
     <label style="margin-left: 110px;font-size: 20px;">483k views ....  2 months ago</label>
    </div>
 </div>
 <div style="float: left;">
    <div>
     <video src="videos/flutter.mp4"  class="video" poster="images/codes.jpeg" controls muted >
    </div>
    <div style="float: left;">
     <img src="images/flutterdev.png" class="icon_user" style="margin-left: 60px; margin-top: 15px;">
    </div>
    <div style="margin-top: 20px;">
     <label style="margin-left: 10px;font-size: 20px;font-weight: bold;">Flutter tips for beginners </label><br>
     <label style="margin-left: 10px;font-size: 20px;">Flutter Dev</label><br>
     <label style="margin-left: 110px;font-size: 20px;">783k views ....  2 months ago</label>
    </div>
 </div>
   </div>        
    </div>
</form>

</body>
</html>
