<!DOCTYPE html>
<?php 
include('connection.php');
include('session.php'); 
$result=mysqli_query($conn, "select * from guests where g_ID='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
?>
<html>
    <head>
        <meta charset="utf-8">     
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <title> Service</title>  
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
                        <li> <a href="booking1.php">booking</a> </li>
                        <li class="current"> <a href="services.php">Services</a> </li>
                        <li> <a href="about.php">About</a> </li>
                    </ul>
                </nav>
            </div>     
        </header>
        <section id="newsletter">
            <div class="container">
                <h1> Subscribe to our Newsletter</h1>
                <form>
                    <input type="email" placeholder="Enter E-mail...">
                    <button type="submit" class="btn_subscribe">Subscribe</button>
                </form>
            </div>
        </section>
        <section id="main">
            <div class="container">
                <article id="main-col">
                    <h1 id="page-title">Services</h1>
                    <ul id="services">
                        <li>
                            <h3>Perfect Pampering</h3>
                            <p>We partnered with the world-renowned Joffrey Ballet to create a program that develops our staff's natural poise and grace. Since we believe that exceptional service starts with exceptional training.
                            </p>
                            <p>Pricing: $500 - $1,000</p>
                        </li>
                        <li>
                            <h3>Meeting Services</h3>
                            <p>Stay organized and easily plan meetings on-the-go with the Marriott Meeting Services App. Let our app help make event management stress-free.
                            </p>
                            <p>Pricing: $250 per month</p>
                        </li>
                        <li>
                            <h3>Foster Champion</h3>
                            <p>When Roger Fok isn't creating desserts at the JW Hong Kong, he impresses culinary judges all over the globe with his edible art. And we encourage him to do so. After all, who wouldn't like a treat from a world champion chocolatier
                            </p>
                            <p>Pricing: $25 per month</p>
                        </li>
                    </ul>
                </article>
                <aside id="sidebar">
                    <div class="dark">
                        <h3>Get a Quote</h3>
                        <form class="quote">
                            <div>
                                <label>Name</label> <br>
                                <input type="text" placeholder="Enter your Name...">
                            </div>
                            <div>
                                <label>E-mail</label> <br>
                                <input type="text" placeholder="Enter your E-mail...">
                            </div>
                            <div>
                                <label>Message</label> <br>
                                <textarea placeholder="Write your Quetion..."></textarea>
                            </div>
                            <button class="btn_subscribe" type="submit">Send</button>
                        </form>
                    </div>
                </aside>
            </div>
        </section>
        <footer>
             <p> 1996 - 2018 &copy; MARRIOTT INTERNATIONAL, INC. ALL RIGHTS RESERVED.</p>
        </footer>
    </body>

</html>