<!Doctype html>
<?php 
include('connection.php');
include('session.php'); 
$result=mysqli_query($conn, "select * from guests where g_ID='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);
?>
<html>
    <head>
        <title>Marriot Hotel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="CSS/style.css">
<style>   
 footer{
    padding: 20px;
    margin-top: 150px;
    color: #ffffff;
    background-color: #b92441;
    text-align: center;
}       
</style>
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
                        <li class="current"> <a href="booking1.php">booking</a> </li>
                        <li> <a href="services.php">Services</a> </li>
                        <li> <a href="about.php">About</a> </li>
                    </ul>
                </nav>
            </div>
        </header>
        <div id="main_image">
              <img src="images/marriot1.jpg">
          </div>
        <section>
            <div class="container">
                    <table id="customers">
                        <tr>
                            <th>Room#</th>
                            <th>Price</th>
                            <th>Room Type</th>
                            <th>Availability</th>
                            <th></th>
                        </tr>
        
        <?php
        
            $select = $_GET['type'];
            $query = mysqli_query($conn, "SELECT * FROM room_info where bed_type = '$select'");
                   
            if($query){
            while($row = mysqli_fetch_array($query)){
                $room_no = $row['room_no'];
                $price = $row['price'];
                print "
                
                    <tr>
                     <td>{$row['id']}</td>
                     <td>{$row['price']}</td>
                        <td>{$row['room_no']}</td>
                        
                        <td>{$row['bed_type']}</td>
                       
                        <td><a href=\"booking2.php?room_no=$room_no & price=$price\">Book</a></td>
                    </tr>
                
                ";
            }
            }
                        
            else 
                { // Query didn't run.
                    print "<p style=\"color: red;\">Could not retrieve the data because:<br>". mysqli_error($conn) .
                         ".</p><p>The query being run was: " . $sql . "</p>";
                }

        mysqli_close($conn);
            
        
        ?>
                </table>
            </div>
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