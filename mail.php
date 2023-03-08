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
    //$subject2 = "Copy of Hanvikainfra form submission";
    $message = "Name:".$_POST['name'] . "\n\n " . "Date :". $_POST['Date'].
    "\n\n"."Email :" .$_POST['email'] ."\n\n" . "Phone :" .$_POST['phone']
    ."\n\n" . "Time :" .$_POST['time']."\n\n" . "People :" .$_POST['people']
    ."\n\n" . "Message :" .$_POST['message'];

    //$message2 = "Here is a copy of your message " . "\n\n "." Name:".$_POST['name'] . "\n\n " . "Phone :". $_POST['phone']."\n\n ". "Message:".$_POST['message'];
    $headers = "From:" . $email;
 
    //$headers2 = "From:" . $email;set_time_limit(300);
    if(mail($to,$subject,$message,$headers))
{
    echo '<script>alert("Mail Sent. Thank you '.$name.', We Will Contact You Shortly")</script>';
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
  
    }

 ?>