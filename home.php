<?php 
include('connection.php');
include('session.php'); 
$result=mysqli_query($conn, "select * from guests where g_ID='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
?>
<html>
<head>
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>    
    <header>
            <div class="container">
                <div id="title">
                    <h1><span class="highlight">Marriot</span> Hotel</h1>
                </div>
                <div id="logo">
                    <img src="images/Mlogo.png"/>
                </div>
                <div id="welcome_name">
                    <p >Welcome: <?php echo $row['firstName']; ?> <br/>
                    <a  href="logout.php"><button id="logout">Logout</button></a></p>
                </div>
                <nav>
                    <ul>
                        <li class="current"> <a href="home.php">Home</a> </li>
                        <li> <a href="booking1.php">booking</a> </li>
                        <li> <a href="services.php">Services</a> </li>
                        <li> <a href="about.php">About</a> </li>
                    </ul>
                </nav>
            </div>     
        </header>
          <div id ="main_image">
              <img src="images/marriot1.jpg">
          </div>
            <div id="register_container">
               <img src="images/reward.PNG"  />
               
                <h2>Marriott Rewards &reg; Member Rates. Our lowest rates. All the time.</h2>
                <center>
                    <a href="login.php"><button class="btn_login">Sign in</button></a>
                    <a href="registration.php"><button class="btn_reg">Join now</button></a>
                </center>
            </div> 
        <h1 id=offer>This Week's Top Offers</h1>
        <section id="boxes">
            <div class="offer-container">
                <div class="box">
                    <a href="#"><img src="images/offer.jpg"></a>
                </div>
                <div class="box">
                    <a href="#"><img src="images/offer1.jpg"></a>
                </div>
                <div class="box">
                    <a href="#"><img src="images/offer2.jpg"></a>
                </div>
            </div>
        </section>
        <div class="content">
            <div class="column">
                <h2>Marriott Rewards</h2>
                <p>Marriott Rewards Overview</p>
                <p>Earn Points</p>
                <p>Use Points</p>
                <p>Discover Benefits</p>
                <p>Marriott Rewards Credit Card</p>
                <p>Marriott Rewards Community</p>
            </div>
            <div class="column">
                <h2>Meetings & Events</h2>
                <p>Meetings & Events Overview</p>
                <p>Business Meetings</p>
                <p>Weddings</p>
                <p>Convention & Resort Hotels</p>
                <p>European Convention Network</p>
            </div>
            <div class="column">
                <h2>Deals & Packages</h2>
                <p>Deals</p>
                <p>Experiences by Marriottsm Packages</p>
                <p>Hotel & Flight Packages</p>
                <p>Cars, Tours, Activities</p>
                <p>Timeshare Offers</p>
                <p>Resort & All-Inclusive Vacations</p>
            </div>
        </div>
    
    
        <footer>
            <p> 1996 - 2018 &copy; MARRIOTT INTERNATIONAL, INC. ALL RIGHTS RESERVED.</p>
        </footer>

</body>
</html>