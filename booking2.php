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
                        <li class="current"> <a href="booking2.php">booking</a> </li>
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
        <section>
    <?php
        $room_no = $_GET['room_no'];
        $price = $_GET['price'];                
        $query = mysqli_query($conn, "SELECT * FROM room_info where room_no = $room_no");                
        $row = mysqli_fetch_array($query);      
        $type = $row['bed_type'];
        if($row['room_no'] == "?"){    
        print "
            <div class=\"calc\">
            <form action =\"calculate.php\" method=\"post\" class=\"form_fill\"> 
            
                <h1> Book your Room Now!</h1>
                
                <p>Room Number <input type=\"text\" name=\"roomno\" value=\"$room_no\"> </p>
                
                <p>Price <input type=\"text\" name=\"price\" value=\"$price\"></p>
                
                <p>Number of days <input type=\"text\" name=\"days\"> </p>
                
                <p>Customer Name <input type=\"text\" name=\"name\"></p>
                
                <p>Customer ID <input type=\"text\" name=\"id\"></p>
                
                <p>Customer Address <input type=\"text\" name=\"address\"></p>
                
                <p>Customer Phone <input type=\"text\" name=\"phone\"> <br> <br>
                
                <input type=\"submit\" value=\"Book\">
            
            </form>
            </div>
        ";
    }
    else{
        print "
           <p class=\"wrong\"> This Room has been booked choose another one from <a href=\"search.php?type=$type\">here</a></p>
        ";
    }
    ?> 
    </section>
    <section>
            <div class="rest">
            
            </div>
        </section>
        <footer>
            <p> 1996 - 2018 &copy; MARRIOTT INTERNATIONAL, INC. ALL RIGHTS RESERVED.</p>
        </footer>

</body>
</html>