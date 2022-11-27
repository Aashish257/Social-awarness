<?php
function time_stamp($session_time) 
{ 
 
$time_difference = time() - $session_time ; 
$seconds = $time_difference ; 
$minutes = round($time_difference / 60 );
$hours = round($time_difference / 3600 ); 
$days = round($time_difference / 86400 ); 
$weeks = round($time_difference / 604800 ); 
$months = round($time_difference / 2419200 ); 
$years = round($time_difference / 29030400 ); 

if($seconds <= 60)
{
echo"$seconds seconds ago"; 
}
else if($minutes <=60)
{
   if($minutes==1)
   {
     echo"one minute ago"; 
    }
   else
   {
   echo"$minutes minutes ago"; 
   }
}
else if($hours <=24)
{
   if($hours==1)
   {
   echo"one hour ago";
   }
  else
  {
  echo"$hours hours ago";
  }
}
else if($days <=7)
{
  if($days==1)
   {
   echo"one day ago";
   }
  else
  {
  echo"$days days ago";
  }


  
}
else if($weeks <=4)
{
  if($weeks==1)
   {
   echo"one week ago";
   }
  else
  {
  echo"$weeks weeks ago";
  }
 }
else if($months <=12)
{
   if($months==1)
   {
   echo"one month ago";
   }
  else
  {
  echo"$months months ago";
  }
 
   
}

else
{
if($years==1)
   {
   echo"one year ago";
   }
  else
  {
  echo"$years years ago";
  }

}
 
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crime Social</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">   
    <link rel="stylesheet" href="css/style.css" >
</head>
<body>
    <nav>
        <div class="container">
            <h2 class="log">
                crimeAware
            </h2>
            <div class="search-bar">
                <i class="uil uil-search"></i>
                <input type="search" placeholder="Search for creators, inspirations, and projects">
            </div>
            <div class="create">
                <label for="create-post" class="btn btn-primary">Create</label>
                <div class="profile-photo">
                    <img src="img/Profile.jpg" alt="" >
                </div>
            </div>
        </div>
    </nav>

    <!---------------------Main--------------------->
    <main>
        <div class="container">
            <div class="left">
                <a class="profile">
                    <div class="profile-photo">
                        <img src="img/Profile.jpg">
                    </div>
                    <div class="handle">
                        <h4>Aashish</h4>
                        <p class="text-muted">
                            @Aashish
                        </p>
                    </div>
                </a>

                <!---SIDEBAR-->
                <div class="sidebar">
                    <a class="menu-item active">
                        <span> <i class="uil uil-home"></i></span> <h3>Home</h3>
                    </a>
                    <a class="menu-item">    
                        <span><i class="uil uil-compass"></i></span><h3>Explore</h3>
                    </a>
                    <a class="menu-item" id="notifications">
                        <span><i class="uil uil-bell"><small class="notification-count">9+</small></i></span><h3>Notifications</h3>
                        <div class="notifications-popup">
                            <div>
                                <div class="profile-photo">
                                    <img src="img/Profile.jpg">
                                </div>
                                <div class="notification-body">
                                    <b>Wellcome to our site</b>
                                    <small class="text-muted">1 min ago</small>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="menu-item" id="messages-notifications">
                        <span><i class="uil uil-envelope"><small class="notification-count">6</small></i></span><h3>Messages</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-bookmark"></i></span><h3>Bookmarks</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-chart-line"></i></span><h3>Analytics</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-swatchbook"></i></span><h3>Theme</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-setting"></i></span><h3>Setting</h3>
                    </a>
                </div>
                <label for="create-post" class="btn btn-primary">Create-post</label>
            </div>

             <!-------------------------- End of Left ------------------------->


            <!-------------Middle--------->
            <div class="middle">
                <div class="stories">
                    <div class="story">
                        <div class="profile-photo">
                            <img src="img/Profile.jpg" >
                            
                        </div>
                        <p class="name">Aashish</p>
                    </div>
                </div>

                <!--------End OF Stories------->
                <form class="create-post">
                    <div class="profile-photo">
                        <img src="img/Profile.jpg"> 
                    </div>
                    <input type="text" placeholder="What's on your min, Aashish?">
                    <input type="submit" value="Post" class="btn btn-primary">
                </form>

                <!-------------------Feeds ------------->
                <div class="feeds">
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="img/Profile.jpg" >
                                </div>
                                <div class="info">
                                    <h3>Aashish</h3>
                                    <small>India 2 min ago</small>
                                </div>
                            </div>
                            <spam class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </spam>
                        </div>
                        <div class="photo">
                            <img src="img/ua0y7wzp.bmp">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-alt-dots"></i></span>

                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark"></i></span>
                            </div>
                        </div>

                        <div class="liked-by">
                            <span><img src="img/blank-profile-picture-973460_1280.webp"></span>
                            <span><img src="img/blank-profile-picture-973460_1280.webp"</span>
                            <p>View by <b>Yogesh</b> and <b>sumedh</b></p>
                        </div>

                        <div class="caption">
                            <p><b>Help the Boy.</b> <span class="harsh-tag">#save #help </span></p>
                        </div>
                        <div class="comments text-muted">
                            View all 277 comments
                        </div>
                    </div>
                </div>
            </div>

            <!--Right section-->
            <div class="right">
               <div class="messages">
                <div class="heading">
                    <h4>
                        Messages
                    </h4>
                    <i class="uil uil-message"></i>
                </div>
                <div class="search-bar">
                    <i class="uil uil-search"></i>
                    <input type="search" placeholder="Search For Higer authority" id="messages-search">
                </div>
                <div class="category">
                    <h6 class="active">Primary</h6>
                    <h6>General</h6>
                    <h6 class="message-requests">Requests</h6>
                </div>
                <div class="message">
                    <div class="profile-photo">
                        <img src="img/blank-profile-picture-973460_1280.webp">
                    </div>
                    <div class="massage-body">
                        <h5>Edem Quist</h5>
                        <p class="text-muted">
                            Just woke up bruh
                        </p>
                    </div>
                </div>
               </div>
               
               <!------------End of Massage---------------------->
               
            </div>
        </div>        
    <script href="js/style.js"></script>
    </main>

</body>
</html>