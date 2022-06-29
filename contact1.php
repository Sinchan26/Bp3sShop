<?php

// include "db_conn.php";
$conn = mysqli_connect('localhost','root','','test_db');
if(isset($_POST['done'])){
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $msg=$_POST['message'];
    $insert="INSERT INTO `contact`(`name`, `mail`, `msg`) VALUES ('$name','$mail','$msg')";
    mysqli_query($conn,$insert);
    header('location:contact1.php');
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You can contact us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="contact1.css">
</head>
<body>
    <section class="contact">
        <div class="content">
            <h2>Contact us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus unde eum harum, qui ex incidunt labore fugiat rerum voluptate repudiandae.</p>

        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Kolaghat KTPP<br>721116<br>Raksha-chalk</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+91 8927888654</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>cse19117@cemk.ac.in</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="" method="post"> 
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="mail" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                       <input type="text" name="messsage" required="required">
                       <span>Type Your Message/Feedback</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="done" value="send">
                        
                    </div>
                </form>
            </div>
        </div>
    </section>
    


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>