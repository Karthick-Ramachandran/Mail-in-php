<?php

// if button is pressed send the data to mail
if(isset($_POST['send'])){
    $date = $_POST['appointment-date'];
    $time = $_POST['appointment-time'];
  $email = $_POST['email'];
   $data = $_POST['message'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
   
$to = "receivermail@mail.com";
$subject = "Customer Books An Appointment";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>

<table style='border:1px solid black'>
  <tr style='border:1px solid black'>
      <th style='border:1px solid black'>Appointment Date</th>
    <th style='border:1px solid black'>Appointment Time</th>

    <th style='border:1px solid black'>Name</th>
    <th style='border:1px solid black'>Email</th> 
    <th style='border:1px solid black'>Phone</th> 
    <th style='border:1px solid black'>Message</th>
  </tr>
  <tr style='border:1px solid black'>
      <td style='border:1px solid black'>$date</td>

    <td style='border:1px solid black'>$time</td>

    <td style='border:1px solid black'>$name</td>
    <td style='border:1px solid black'>$email</td>
    <td style='border:1px solid black'>$phone</td>
    <td style='border:1px solid black'>$data</td>

  </tr>
 
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: mail@mail.com' . "\r\n";

if(mail($to,$subject,$message,$headers)){
    
    echo "<script> alert(' $name Mail sent SuccessFully') </script>";
    
}

else{
    echo "<script> alert('Failed To send') </script>";
}

}
?>


