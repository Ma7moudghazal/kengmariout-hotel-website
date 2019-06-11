<?php 
include('connection.php');
include('session.php'); 
$result=mysqli_query($conn, "select * from guests where g_ID='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
?>
<html>
<head>
    <title>Booking</title>
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
                        <li> <a href="home.php">Home</a> </li>
                        <li class="current"> <a href="booking.php">booking</a> </li>
                        <li> <a href="services.php">Services</a> </li>
                        <li> <a href="about.php">About</a> </li>
                    </ul>
                </nav>
            </div>
        </header>
          <div id="main_image">
              <img src="images/marriot1.jpg">
          </div>
            <section id="newsletter">
            <div class="container">
                <form action="search.php" method="get">
                    <select name="type" class="select">
                     <option value="" disabled selected>Choose your room type...</option>
                     <option value="single">Single</option>
                     <option value="double">Double</option>
                     <option value="triple">Triple</option>
                    </select>
                    <button type="submit" class="btn_Search">Search</button>
                </form>
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