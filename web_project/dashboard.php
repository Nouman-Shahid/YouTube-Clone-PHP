<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
    header("Location: signin.html");
    exit;
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Youtube</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
<form action="connection.php" method="POST" enctype="multipart/form-data">

    <div style="height: 1250px;">
        <div id="top_nav">
            <div><img src="images/menubar.png" class="icon_menu"></div>
            <div><a href="http://localhost/web_project/home.html"><img src="images/youtube.png" class="icon_yt"></a></div>
            <div><label class="text">Youtube</label></div>
            <div><input type="text" id="search" placeholder="Search"></div>
            <div class="search_div2"><img src="images/search.png" class="icon_search"></div>
            <div><img src="images/microphone.png" class="icon_microphone"></div>
            <div>
            <a href="http://localhost/web_project/upload.php">
            <img src="images/live.png" class="icon_live"> </a></div>
            <div><img src="images/bell.png" class="icon_bell"></div>
            <div style="margin-left:20px"> <img src="images/user1.png" class="icon_user"></div>
          
            <div style="margin-top: 15px; margin-left: 5px;"><a id="signin"><?php echo $_SESSION['name']; ?></a></div>
        </div>

        <div id="side_nav">
            <ul style="list-style: none; margin-left: -40px;">
                <li class="home_list" >  
                    <img src="images/home.png"  class="icons">
                    <label class="lbl">Home</label>  
                 </li>
                 <li  class="list">  
                    <img src="images/shorts.png" class="icons">
                    <label class="lbl">Shorts</label>  
                 </li>
                 <li  class="list">  
                    <img src="images/subscription.png" class="icons">
                    <label class="lbl">Subscription</label>  
                 </li> 
                 <br>
                 <hr style="width: 165px;margin-left: -2px;"> 
                 <li class="list">  
                    <img src="images/library.png" class="icons">
                    <label class="lbl">Channels</label>  
                 </li>
                 <li class="list">
                 <img src="images/flutterdev.png" class="icons">
                 <input type="submit" name="flutter_dev" value="Flutter Dev" style="background:transparent; color:black;
                  width:120px; font-size:18px; border:none; height:40px">
                 </li>
                 <li  class="list">  
                    <img src="images/s90.png" class="icons">
                    <label class="lbl">Score90</label>  
                 </li>
                 <li class="list">
                 <img src="images/j.png" class="icons">
                 <input type="submit" name="pak_cricket" value="Sports Live" style="background:transparent; color:black;
                  width:120px; font-size:16px; border:none; height:40px">
                 </li>
                 <li  class="list">  
                    <img src="images/history.png" class="icons">
                    <label class="lbl">History</label>  
                 </li>
                 <br>
                 <hr style="width: 165px;margin-left: -2px;"> 
                 <li class="list">  
                    <img src="images/trending.png" class="icons">
                    <label class="lbl">Trending</label>  
                 </li>
                 <li class="list">  
                    <img src="images/gaming.png" class="icons">
                    <label class="lbl">Gaming</label>  
                 </li> 
                 <li  class="list">  
                    <img src="images/cup.png" class="icons">
                    <label class="lbl">Sports</label>  
                 </li> 
                 <li class="list">  
                    <img src="images/news.png" class="icons">
                    <label class="lbl">News</label>  
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
                 <br>
                 <li class="list">
                 <img src="images/logout.png" class="icons">
                 <input type="submit" name="logout" value="logout" style="background:transparent; color:black;
                  width:100px; font-size:20px; border:none; height:40px">
                 </li>
                 <hr style="width: 165px;margin-left: -2px;"> 
                 <li class="list" style="margin-top: 30px;font-size: 18px;">
                    <label>About Press Copyright Contact us Creators Advertise Developers</label>
                 </li>
                 <li class="list" style="margin-top: 20px;font-size: 18px;">
                    <label>Terms Privacy Policy & Safety How YouTube works Test new features</label>
                 </li>
                 <li class="list" style="margin-top: 20px;font-size: 18px;">
                    <label>© 2023 Google LLC</label>
                 </li>
            </ul>
        </div>
        
        <div id="searches_nav">
           <div class="highlighted_div"> 
            <a href="http://localhost/web_project/home.html" class="highlighted_tag"> All</a>
         </div> 
           <div class="highlighted_div"> <a href="#" class="normal_tag"> Live</a></div> 
           <div class="highlighted_div"> <a href= "http://localhost/web_project/coding.html" class="normal_tag"> Coding</a></div> 
           <div class="highlighted_div"> <a  class="normal_tag"> PHP</a></div> 
           <div class="highlighted_div"> <a href="#" class="normal_tag"> Gaming</a></div> 
           <div class="highlighted_div"> <a href="#" class="normal_tag"> Trending</a></div> 
           <div class="highlighted_div"> <a href= "http://localhost/web_project/sports.html" class="normal_tag"> Sports</a></div> 
           <div class="highlighted_div"> <a href="#" class="normal_tag"> Travelling</a></div> 
           <div class="highlighted_div"> <a href="#" class="normal_tag"> News</a></div> 
           <div class="highlighted_div"> <a href="#" class="normal_tag"> Recent uploaded</a></div> 
        </div>
            
    <div id="video_div">
                <div style="float: left;">
                    <div>
                     <video src="videos/messi.mp4" poster="images/cwhposter.jpeg" data-name="cwh"  class="video" controls muted >
                    </div>
                    <div style="float: left;">
                     <img src="images/cwh.png" class="icon_user" style="margin-left: 60px; margin-top: 15px;">
                    </div>
                    <div style="margin-top: 20px;">
                     <label style="margin-left: 10px;font-size: 20px;font-weight: bold;">Concept of Pointer | C++ Programming</label><br>
                     <label style="margin-left: 10px;font-size: 20px;">Code With Harry</label><br>
                     <label style="margin-left: 110px;font-size: 20px;">1 million views ....  4 years ago</label>
                    </div>
                 </div>
       
        <div style="float: left;">
            <div>
             <video src="videos/messi.mp4" poster="images/messi.jpeg" class="video" controls muted >
            </div>
            <div style="float: left;">
             <img src="images/s90.png" class="icon_user" style="margin-left: 60px; margin-top: 15px;">
            </div>
            <div style="margin-top: 20px;">
             <label style="margin-left: 10px;font-size: 20px;font-weight: bold;">Messi - The Best of All Time | GOAT </label><br>
             <label style="margin-left: 10px;font-size: 20px;">Score 90</label><br>
             <label style="margin-left: 110px;font-size: 20px;">11 million views ....  2 years ago</label>
            </div>
         </div>
         <div style="float: left;">
            <div>
             <video src="videos/bbc.mp4" class="video" controls muted >
            </div>
            <div style="float: left;">
             <img src="images/bbc.png" class="icon_user" style="margin-left: 60px; margin-top: 15px;">
            </div>
            <div style="margin-top: 20px;">
             <label style="margin-left: 10px;font-size: 20px;font-weight: bold;">Why Titanic sub hard to find? </label><br>
             <label style="margin-left: 10px;font-size: 20px;">BBC News</label><br>
             <label style="margin-left: 110px;font-size: 20px;"> 206k views ....  2 week ago</label>
            </div>
         </div>
         <div style="float: left;">
            <div>
             <video src="videos/flutter.mp4" poster="images/flutterposter.png" class="video" controls muted >
            </div>
            <div style="float: left;">
             <img src="images/flutter.png" class="icon_user" style="margin-left: 60px; margin-top: 15px;">
            </div>
            <div style="margin-top: 20px;">
             <label style="margin-left: 10px;font-size: 20px;font-weight: bold;">Flutter Development | For Beginners </label><br>
             <label style="margin-left: 10px;font-size: 20px;">Flutter Development</label><br>
             <label style="margin-left: 110px;font-size: 20px;"> 256k views ....  4 days ago</label>
            </div>
         </div>
         <div style="float: left;">
            <div>
             <video src="videos/bbc.mp4" poster="images/tomposter.jpeg" class="video" controls muted >
            </div>
            <div style="float: left;">
             <img src="images/cn.png" class="icon_user" style="margin-left: 60px; margin-top: 15px;">
            </div>
            <div style="margin-top: 20px;">
             <label style="margin-left: 10px;font-size: 20px;font-weight: bold;">Tom & Jerry : Ep 71 | Cartoon Network </label><br>
             <label style="margin-left: 10px;font-size: 20px;">Cartoon Network</label><br>
             <label style="margin-left: 110px;font-size: 20px;">7 million views ....  5 years ago</label>
            </div>
         </div>
         <div style="float: left;">
            <div>
             <video src="videos/flutter.mp4"  class="video" controls muted >
            </div>
            <div style="float: left;">
             <img src="images/bbc.png" class="icon_user" style="margin-left: 60px; margin-top: 15px;">
            </div>
            <div style="margin-top: 20px;">
             <label style="margin-left: 10px;font-size: 20px;font-weight: bold;">Cyclon Biparjoy | Explained </label><br>
             <label style="margin-left: 10px;font-size: 20px;">BBC News</label><br>
             <label style="margin-left: 110px;font-size: 20px;">80k views ....  3 weeks ago</label>
            </div>
         </div>
         <div style="float: left;">
            <div>
             <video src="videos/babar.mp4" poster="images/asia.jpeg" class="video" controls muted >
            </div>
            <div style="float: left;">
             <img src="images/jaw.png" class="icon_user" style="margin-left: 60px; margin-top: 15px;">
            </div>
            <div style="margin-top: 20px;">
             <label style="margin-left: 10px;font-size: 20px;font-weight: bold;"> Asia Cup in Pakistan? | Asia Cup 2023 </label><br>
             <label style="margin-left: 10px;font-size: 20px;">Jawad Ali</label><br>
             <label style="margin-left: 110px;font-size: 20px;"> 200k views ....  3 months ago</label>
            </div>
         </div>
         <div style="float: left;">
            <div>
             <video src="videos/babar.mp4" poster="images/babar.jpeg" class="video" controls muted >
            </div>
            <div style="float: left;">
             <img src="images/pakcricket.png" class="icon_user" style="margin-left: 60px; margin-top: 15px;">
            </div>
            <div style="margin-top: 20px;">
             <label style="margin-left: 10px;font-size: 20px;font-weight: bold;"> King Babar vs England | T20-2022 </label><br>
             <label style="margin-left: 10px;font-size: 20px;">Pakistan Cricket</label><br>
             <label style="margin-left: 110px;font-size: 20px;"> 4 million views ....  10 months ago</label>
            </div>
         </div>
         <div style="float: left;">
            <div>
             <video poster="images/ja.jpeg" src="videos/flutter.mp4" class="video" controls muted  style="height: 225px;">
            </div>
            <div style="float: left;">
             <img src="images/j.png" class="icon_user" style="margin-left: 60px; margin-top: 15px;">
            </div>
            <div style="margin-top: 20px;">
             <label style="margin-left: 10px;font-size: 20px;font-weight: bold;"> Are We Going Backward ? </label><br>
             <label style="margin-left: 10px;font-size: 20px;">Junaid Akram</label><br>
             <label style="margin-left: 110px;font-size: 20px;">170k views ....  1 months ago</label>
            </div>
         </div>
        </div>

    </div>
<form>
</body>
</html>
</body>
</html>
