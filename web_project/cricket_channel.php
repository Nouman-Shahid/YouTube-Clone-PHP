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
               <img src="images/j.png" style="height: 120px; width: 120px;margin-top:20px" class="icon_user"></div>
               <div style="height:30px; width:150px; margin-top:15px;">
              <center> <a href="#" style="font-size:27px" id="signin">Sports Live</a> </center>
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
              <video src="videos/babar.mp4" poster="images/babar.jpeg" data-name="cwh"  class="video" controls muted >
             </div>
             <div style="float: left;">
              <img src="images/j.png" class="icon_user" style="margin-left: 60px; margin-top: 15px;">
             </div>
             <div style="margin-top: 20px;">
                <label style="margin-left: 10px;font-size: 20px;font-weight: bold;"> King Babar vs England | T20-2022 </label><br>
                <label style="margin-left: 10px;font-size: 20px;">Sports Live</label><br>
                <label style="margin-left: 110px;font-size: 20px;"> 902k views .... 1 week ago</label>
               </div>   
          </div>

 <div style="float: left;">
     <div>
      <video src="videos/messi.mp4" poster="images/messi.jpeg" class="video" controls muted >
     </div>
     <div style="float: left;">
      <img src="images/j.png" class="icon_user" style="margin-left: 60px; margin-top: 15px;">
     </div>
     <div style="margin-top: 20px;">
        <label style="margin-left: 10px;font-size: 20px;font-weight: bold;">Messi - The Best of All Time | GOAT </label><br>
        <label style="margin-left: 10px;font-size: 20px;">Sports Live</label><br>
        <label style="margin-left: 110px;font-size: 20px;">1.5 million views ....  3 weeks ago</label>
       </div>
  </div>
  <div style="float: left;">
     <div>
      <video src="videos/babar.mp4"  class="video" controls muted >
     </div>
     <div style="float: left;">
      <img src="images/j.png" class="icon_user" style="margin-left: 60px; margin-top: 15px;">
     </div>
     <div style="margin-top: 20px;">
      <label style="margin-left: 10px;font-size: 20px;font-weight: bold;">Highlight of Pak vs Eng</label><br>
      <label style="margin-left: 10px;font-size: 20px;">Sports Live</label><br>
      <label style="margin-left: 110px;font-size: 20px;"> 512k views ....  1 month ago</label>
     </div>
  </div>
  <div style="float: left;">
     <div>
      <video src="videos/babar.mp4" poster="images/thumbnail.jpeg" class="video" controls muted >
     </div>
     <div style="float: left;">
      <img src="images/j.png" class="icon_user" style="margin-left: 60px; margin-top: 15px;">
     </div>
     <div style="margin-top: 20px;">
        <label style="margin-left: 10px;font-size: 20px;font-weight: bold;">Fight of the Year! | Full Fight Replay </label><br>
        <label style="margin-left: 10px;font-size: 20px;">Sports Live</label><br>
        <label style="margin-left: 110px;font-size: 20px;"> 706k views ....  1 months ago</label>
       </div>
  </div>
  <div style="float: left;">
     <div>
      <video src="videos/bbc.mp4" poster="images/cr7.jpeg" style="height:225px" class="video" controls muted >
     </div>
     <div style="float: left;">
      <img src="images/j.png" class="icon_user" style="margin-left: 60px; margin-top: 15px;">
     </div>
     <div style="margin-top: 20px;">
      <label style="margin-left: 10px;font-size: 20px;font-weight: bold;">Al Nasr 3-2 Al Shabab | Saudi League </label><br>
      <label style="margin-left: 10px;font-size: 20px;">Sports Live</label><br>
      <label style="margin-left: 110px;font-size: 20px;">2 million views ....  3 month ago</label>
     </div>
  </div>
          
    </div>
</form>

</body>
</html>
