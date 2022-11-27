<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  
  <title>Frontend Mentor | Social Media Dashboard</title>
  <link rel="stylesheet" href="css/Dashboard.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <script src="script.js" defer></script>
</head>

<body class="light">

  <div class="social-media">

  <div class="container">

    <div class="top-flex">

      <div class="title-flex title-1">
        <div class="title-heading">Social Media Dashboard</div>
        <div class="title-info">Total Followers: 23,004</div>
        <hr>
      </div>

      <div class="title-flex title-2">

        <div class="dark-title">Dark Mode</div>

        <div class="toggle-button">
          <label for="radio" class="label-radio">
            <input type="radio" name="radio" class="radio-btn" id="radio1">
            <input type="radio" name="radio" class="radio-btn" id="radio2" checked>
            <div class="ball"></div>
          </label>
        </div>

      </div> 

    </div> <!---end of top-flex class div-->

    <div class="profile-section">

      <div class="profile-card profile-one"> <!--first profile-->

        <div class="profile-flex"> 
          <div class="profile-icon"><img src="images/icon-facebook.svg" alt="icon-facebook"></div>
          <div class="profile-name">@nathanf</div>
        </div>

        <div class="followers">1987</div>
        <div class="followers-heading">Followers</div>
        
        <div class="follow-flex">
          <div class="indicator"><img src="images/icon-up.svg" alt="icon-up"></div>
          <div class="indicator-value">12</div>
          <div class="today">Today</div>
        </div>

      </div>

      <div class="profile-card profile-two"> <!--second profile-->

        <div class="profile-flex"> 
          <div class="profile-icon"><img src="images/icon-twitter.svg" alt="icon-twitter"></div>
          <div class="profile-name">@nathanf</div>
        </div>

        <div class="followers">1044</div>
        <div class="followers-heading">Followers</div>
        
        <div class="follow-flex">
          <div class="indicator"><img src="images/icon-up.svg" alt="icon-up"></div>
          <div class="indicator-value">99</div>
          <div class="today">Today</div>
        </div>

      </div>

      <div class="profile-card profile-three"> <!--third profile-->

        <div class="profile-flex profile-3"> 
          <div class="profile-icon"><img src="images/icon-instagram.svg" alt="icon-facebook"></div>
          <div class="profile-name">@realnathanf</div>
        </div>

        <div class="followers">11k</div>
        <div class="followers-heading">Followers</div>
        
        <div class="follow-flex follow-3">
          <div class="indicator"><img src="images/icon-up.svg" alt="icon-up"></div>
          <div class="indicator-value">1099</div>
          <div class="today">Today</div>
        </div>

      </div>

      <div class="profile-card profile-four"> <!--fourth profile-->

        <div class="profile-flex"> 
          <div class="profile-icon"><img src="images/icon-youtube.svg" alt="icon-facebook"></div>
          <div class="profile-name">Nathan F.</div>
        </div>

        <div class="followers">8239</div>
        <div class="followers-heading">Subscribers</div>
        
        <div class="follow-flex follow-4">
          <div class="indicator"><img src="images/icon-down.svg" alt="icon-down"></div>
          <div class="indicator-value indicator-red">144</div>
          <div class="today indicator-red">Today</div>
        </div>

      </div>

      

    </div> <!---end of profile section class div-->

    <div class="overview-section">

      <div class="overview-heading">Overview - Today</div>

      <div class="page-section">

        <div class="page-card card-one"> <!--page one-->

          <div class="page-flex page-1">
            <div class="page-views">Page Views</div>
            <div class="page-icon"><img src="images/icon-facebook.svg" alt="icon-facebook"></div>
          </div>

          <div class="page-flex page-2">

            <div class="views">87</div>

            <div class="indicate-flex">
              <div class="page-indicator"><img src="images/icon-up.svg" alt="icon-up"></div>
              <div class="percent">3%</div>
            </div>

          </div>
        </div>


        <div class="page-card card-two"> <!--page two-->

          <div class="page-flex page-1">
            <div class="page-views">Likes</div>
            <div class="page-icon"><img src="images/icon-facebook.svg" alt="icon-facebook"></div>
          </div>

          <div class="page-flex page-2">

            <div class="views">52</div>

            <div class="indicate-flex">
              <div class="page-indicator"><img src="images/icon-down.svg" alt="icon-down"></div>
              <div class="percent percent-red">2%</div>
            </div>

          </div>

        </div>


        <div class="page-card card-three"> <!--page three-->

          <div class="page-flex page-1">
            <div class="page-views">Likes</div>
            <div class="page-icon"><img src="images/icon-instagram.svg" alt="icon-instagram"></div>
          </div>

          <div class="page-flex page-2">

            <div class="views">5462</div>

            <div class="indicate-flex">
              <div class="page-indicator"><img src="images/icon-up.svg" alt="icon-up"></div>
              <div class="percent">2257%</div>
            </div>

          </div>

        </div>

    
        <div class="page-card card-four"> <!--page four-->

          <div class="page-flex page-1">
            <div class="page-views">Profile Views</div>
            <div class="page-icon"><img src="images/icon-instagram.svg" alt="icon-instagram"></div>
          </div>

          <div class="page-flex page-2">

            <div class="views">52k</div>

            <div class="indicate-flex">
              <div class="page-indicator"><img src="images/icon-up.svg" alt="icon-up"></div>
              <div class="percent">1375%</div>
            </div>

          </div>

        </div>


        <div class="page-card card-five"> <!--page five-->

          <div class="page-flex page-1">
            <div class="page-views">Retweets</div>
            <div class="page-icon"><img src="images/icon-twitter.svg" alt="icon-twitter"></div>
          </div>

          <div class="page-flex page-2">

            <div class="views">117</div>

            <div class="indicate-flex">
              <div class="page-indicator"><img src="images/icon-up.svg" alt="icon-up"></div>
              <div class="percent">303%</div>
            </div>

          </div>

        </div>


        <div class="page-card card-six"> <!--page six-->

          <div class="page-flex page-1">
            <div class="page-views">Likes</div>
            <div class="page-icon"><img src="images/icon-twitter.svg" alt="icon-twitter"></div>
          </div>

          <div class="page-flex page-2">

            <div class="views">507</div>

            <div class="indicate-flex">
              <div class="page-indicator"><img src="images/icon-up.svg" alt="icon-up"></div>
              <div class="percent"> 553%</div>
            </div>

          </div>

        </div>

        <div class="page-card card-seven"> <!--page seven-->

          <div class="page-flex page-1">
            <div class="page-views">Likes</div>
            <div class="page-icon"><img src="images/icon-youtube.svg" alt="icon-youtube"></div>
          </div>

          <div class="page-flex page-2">

            <div class="views">107</div>

            <div class="indicate-flex">
              <div class="page-indicator"><img src="images/icon-down.svg" alt="icon-down"></div>
              <div class="percent percent-red">19%</div>
            </div>

          </div>

        </div>


        <div class="page-card card-eight"> <!--page eight-->

          <div class="page-flex page-1">
            <div class="page-views">Total Views</div>
            <div class="page-icon"><img src="images/icon-youtube.svg" alt="icon-youtube"></div>
          </div>

          <div class="page-flex page-2">

            <div class="views">1407</div>

            <div class="indicate-flex">
              <div class="page-indicator"><img src="images/icon-down.svg" alt="icon-down"></div>
              <div class="percent percent-red">12%</div>
            </div>

          </div>

        </div>

      </div> <!--end of page-section class div-->

    </div> <!--end of overview-section class div-->

  </div> <!--end of container class div-->

  <div class="attribution">
    Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. 
    Coded by <a href="https://github.com/pranav1597/social-media-dashboard" target="_blank">Pranav</a>.
  </div>

</div> <!---end of social-media div class-->
  

  
  
  
  
  
</body>
</html>