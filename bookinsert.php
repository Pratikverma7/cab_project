<?php
include('dbcon.php');
if (isset($_POST)) 
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$pickup=$_POST['pickup'];
	$person=$_POST['person'];
    $date=$_POST['date'];
    $query="INSERT INTO booking(name,email,phone,pickup,person,date)VALUES('$name','$email','$phone','$pickup','$person','$date')";
    $data=mysqli_query($con,$query);
    if($data)
    {
    	header('Location:pay.php');
       //whatsspp send message start here
         $data = [
         'phone' => '9131867993', // Receivers phone
         'body' => 'Hello, Pratik Verma', // Message
         ];
         $json = json_encode($data); // Encode data to JSON
         // URL for request POST /message
         $token = '83763g87x';
         $instanceId = '777';
         $url = 'https://api.chat-api.com/instance'.$instanceId.'/message?token='.$token;
         // Make a POST request
         $options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
        ]
      ]);
// Send a request
$result = file_get_contents($url, false, $options);

       //send mail code start here
      require 'PHPmailer/PHPMailerAutoload.php';
       //Create a new PHPMailer instance
       $mail = new PHPMailer();
      //Tell PHPMailer to use SMTP
      $mail->IsSMTP(); 
      //Enable SMTP debugging
      // 0 = off (for production use)
      // 1 = client messages
      // 2 = client and server messages
      $mail->SMTPDebug = 2;
      //Ask for HTML-friendly debug output
      $mail->Debugoutput = 'html';
      //Set the hostname of the mail server
      $mail->Host = 'smtp.gmail.com';
      //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
      $mail->Port = 465;
      //Set the encryption system to use - ssl (deprecated) or tls
      $mail->SMTPSecure = 'ssl';
         //Whether to use SMTP authentication
         $mail->SMTPAuth = true;
         //Username to use for SMTP authentication - use full email address for gmail
         $mail->Username = "sender email";
         //Password to use for SMTP authentication
         $mail->Password = "sender email password";
         //Set who the message is to be sent from
         $mail->setFrom('sender email', 'pratik');
         //Set an alternative reply-to address
         $mail->addReplyTo('sender email', 'pratik');
         //Set who the message is to be sent to
          $mail->addAddress('recciver email','PratikVerma');
          //Set the subject line
          $mail->Subject = 'Welcome To wheels Cabs';
         //Read an HTML message body from an external file, convert referenced images to embedded,
          //convert HTML into a basic plain-text alternative body
           $mail->Body     = "Hi, .$name. Welcome To Wheel Cabs \n  Your Booking Details Will Shared Soon,\n your Pickup Location : .$pickup. \n\n Click Here To Pay :http://localhost/cab%20project/pay.php  .";
            //Replace the plain text body with one created manually
           $mail->AltBody = 'This is a plain-text message body';
          //Attach an image file
          //$mail->addAttachment('images/phpmailer_mini.gif');
          $mail->SMTPAuth = true;
          //send the message, check for errors
         if (!$mail->send()) {
         echo "Mailer Error: " . $mail->ErrorInfo;
         } else {
         echo "Message sent!";
         }
    }
}
?>