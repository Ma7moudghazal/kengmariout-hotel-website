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
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="Browse Marriott International's portfolio of hotels & discover what makes each brand unique. Take the stress out of travel & book your hotel reservation direct.">
        <meta name="keywords" content="Marriott Hotels and Resorts wants you to Travel Brilliantly on your next trip">
        <title> About </title>
        <link rel=stylesheet type="text/css" href="CSS/style.css">
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
                        <li> <a href="services.php">Services</a> </li>
                        <li class="current"> <a href="about.php">About</a> </li>
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
                    <h1 class="page-title">About Us</h1>
                    <p>
                       Marriott International is an American multinational diversified hospitality company that manages and franchises a broad portfolio of hotels and related lodging facilities. Founded by J. Willard Marriott, the company is now led by his son, Executive Chairman Bill Marriott, and President and Chief Executive Officer Arne Sorenson.<br>
                       Headquartered in Bethesda, Maryland, in the Washington, D.C. metropolitan area, Marriott International is the largest hotel chain in the world. It has more than 6,500 properties in 127 countries and territories around the world, over 1.2 million rooms (as of September 2017), and an additional 195,000 rooms in the development pipeline. In 2017, Marriott was ranked #33 on Fortune's "100 Best Companies to Work For" list, its twentieth appearance on the list.
                    </p>
                    <p>
                        Marriott International, Inc. is a leading global lodging company with more than 6,500 properties across 127 countries and territories, reporting revenues of more than $22 billion in fiscal year 2017. Founded by J. Willard and Alice Marriott and guided by family leadership for 90 years, the company is headquartered outside of Washington, D.C. in Bethesda, Maryland. 
                    </p>
                    <p class="dark">
                       Best Available Rate Guarantee assures you receive the best rates when you book directly with us. If you find a lower publicly available rate within 24 hours of booking, we will match that rate plus give you 25% off the lower rate, subject to guarantee terms and exclusions. Guarantee does not apply to Ritz-Carlton Montreal, The Ritz London, Ritz-Carlton Residences®
                    </p>
                </article>
                <aside id="sidebar">
                    <div class="dark">
                        <h3>What We Do</h3>
                        <p>
                            Our core values make us who we are. As we change and grow, the beliefs that are most important to us stay the same—putting people first, pursuing excellence, embracing change, acting with integrity and serving our world. Being part of Marriott International means being part of a proud history and a thriving culture.
                        </p>
                    </div>
                </aside>
            </div>
        </section>
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