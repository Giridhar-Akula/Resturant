<!DOCTYPE html>
<html lang="en">
<head>
  <link href="assets/img/FoodLogo.jpg" rel="icon">
  <link href="assets/img/FoodLogo.jpg" rel="apple-touch-icon">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Book a Table - Kaveri Kitchens</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
  <link rel="stylesheet" href="booking.css">
</head>
<body>
  <div class="container">
    <h1 class="brand"><span></span>Book a Table</h1>
    <div class="wrapper">
      <div class="company-info">
          <img src="assets/img/FoodLogo.jpg" class="image"/>
      </div>
      <div class="contact">
        <!--<h3>Email Us</h3>-->
        <div class="alert">"You will receive a message via SMS and email."</div>

<?php 

if(isset($_POST['submit'])){
        
        
// $config['smtp_host'] = 'smtp.gmail.com';
// $config['smtp_user'] = 'ceo@jyothipowertech.in';
// $config['smtp_pass'] = 'pr@veen24081995';
// $config['smtp_port'] = 465;

// $host = "ssl://smtpout.jyothipowertech.in";
//$username = "ceo@jyothipowertech.in";
// $password = "jyothipowertech@123";
// $port = "465";
    $to = "giridharyadav20000104@gmail.com"; // this is your Email address
    //$from = "sudhini.sushma@gmail.com"; // this is the sender's Email address
    $name = $_POST['name'];
    $Date = $_POST['Date'];
    $email = $_POST['email'];
    $phone =$_POST['phone'];
    $time =$_POST['time'];
    $people =$_POST['people'];
    $msg =$_POST['message'];
   
    $subject = "Booked a Table from customer ".$name;
    
    $message = "Name:".$_POST['name'] . "\n\n " . "Date :". $_POST['Date'].
    "\n\n"."Email :" .$_POST['email'] ."\n\n" . "Phone :" .$_POST['phone']
    ."\n\n" . "Time :" .$_POST['time']."\n\n" . "People :" .$_POST['people']
    ."\n\n" . "Message :" .$_POST['message'];

    $headers = "From:" . $email;
 
    if(mail($to,$subject,$message,$headers))
    {
    echo '<script>alert("Mail Sent. Thank you '.$name.', We Will Contact You Shortly")</script>';
    }
  
}

 ?>
        <form action="" method="POST" >
          <p>
            <label>Name</label>
            <input type="text" name="name" id="name" required>
          </p>
          <p>
            <label>Date</label>
            <input type="date" name="Date" id="Date">
          </p>
          <p>
            <label>Email Address</label>
            <input type="email" name="email" id="email" required>
          </p>
          <p>
            <label>Phone Number</label>
            <input type="text" name="phone" id="phone">
          </p>
          <p>
            <label>Time</label>
            <input type="time" name="time" id="time">
          </p>
          <p>
            <label>No.of People</label>
            <input type="number" name="people" id="people">
          </p>
          <p class="full">
            <label>Message</label>
            <textarea name="message" rows="5" id="message"></textarea>
          </p>
          <p class="full">
            <button type="submit" name="submit">Book a table</button>
          </p>
        </form>
      </div>
    </div>
  </div>

  <script src="https://www.gstatic.com/firebasejs/4.3.0/firebase.js"></script>
  <script src="booking.js"></script>
</body>
</html>