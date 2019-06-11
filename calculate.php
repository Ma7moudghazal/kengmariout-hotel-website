<!Doctype html>
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
<style>
.info{
    border-radius: 10px;
    background-color: #f2f2f2;
    clear: both;
    text-align: center;
    border: 1px sold #ddd;
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    max-width: 500px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
h2 {
    color: #b92441;
    text-align: center;
    font-size: 24px;
}
.info p{
    color: #161717;
    font-size: 16px;
}
.info .total{
    font-weight: bold;
    font-size: 18px;
}
footer{
    padding: 20px;
    margin-top:20px;
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
<?php

    $room_no = (int)$_POST["roomno"];

    $price = (int)$_POST["price"];

    $days = (int)$_POST["days"];

    $name = $_POST["name"];

    $id = $_POST["id"];

    $address = $_POST["address"];

    $phone = $_POST["phone"];

    $total = ($days * $price);                
        $query = mysqli_query($conn, "UPDATE room_info SET availability='No' where room_no = $room_no");
                   
        if($query){
            
            $sql = "INSERT INTO book_room (room_no, price, peroid, customer_name, ID, customer_address, customer_phone ) VALUES($room_no, $price, $days, '$name', '$id', '$address', '$phone')";          

            $query = mysqli_query($conn,  $sql);
            
            if($query){
                
                print"
                
                    <h2> Your Information</h2>
                    <div class=\"info\">    
                        <p> Room No: $room_no</p>
                        <p> Price per day: $price$</p>
                        <p> Period: $days</p>
                        <p> Customer Name: $name</p>
                        <p> Customer id: $id</p>
                        <p> Customer address: $address</p>
                        <p> Customer phone: $phone</p>
                        <p class=\"total\"> Total: $total$</p>
                    </div>
                ";
            }
            else{
                    $query = mysqli_query($conn, "UPDATE room_info SET availablity='yes' where room_no = $room_no");
                
                if($query){
                print "
                    <p> Something wrong! May you go back again <a href=\"booking1.php?room_no=$room_no&price=$price\">here</a></p>    
                ";
                }
            }
        }
        else{
         print  " <p> Something wrong! May you go back again from <a href=\"booking1.php?room_no=$room_no&price=$price\">here</a></p>";
        }

?>
        
         <footer>
            <p> 1996 - 2018 &copy; MARRIOTT INTERNATIONAL, INC. ALL RIGHTS RESERVED.</p>
        </footer>
    </body>
</html>