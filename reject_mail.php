<?php
  $ic_no = $_COOKIE['ic_no'];

  session_start();
  include_once('connect.php');

?>

<html>
  <head>
    <style>
p.uppercase {
    text-transform: uppercase;
}

p.lowercase {
    text-transform: lowercase;
}

p.capitalize {
    text-transform: capitalize;
}
</style>
  </head>

  <body>



<?php 
$residential_id = $_GET["residential_id"];
        $username = "root"; 
        $password = ""; 
        $hostname = "localhost";
        $database = "e_rented_house";

        global $residential_id;

        echo var_dump($residential_id);


        $con = ($GLOBALS["___mysqli_ston"] = mysqli_connect($hostname,  $username,  $password, $database)) or die("Could not connect to database"); 

        ((bool)mysqli_query( $con, "USE "));  
        $sql = "SELECT * FROM residential WHERE residential_id = ".$residential_id;



        $result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); 
        $rowcheckroute = mysqli_num_rows($result); 
        $row = mysqli_fetch_array($result); 

        $rejectBecause = $row["reject_because"]; 
        $residential_email = $row["residential_email"]; 

require 'PHPMailer/PHPMailerAutoload.php'; 

$mail = new PHPMailer; 

$mail->isSMTP();                                   // Set mailer to use SMTP 
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;                            // Enable SMTP authentication 
$mail->Username = 'nazmiyakob1994@gmail.com';          // SMTP username 
$mail->Password = 'nazmiyakob94'; // SMTP password 
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 587;                                 // TCP port to connect to 

$mail->setFrom('nazmiyakob1994@gmail.com', 'RentalHouse');    //sender 
$mail->addReplyTo($residential_email); // recipient 
$mail->addAddress($residential_email);   // Add a recipient 
//$mail->addCC('cc@example.com'); 
//$mail->addBCC('bcc@example.com'); 

$mail->isHTML(true);  // Set email format to HTML 

$bodyContent = ' 
<center><h1><b> APPLICATION REJECTED </b></h1><br></center><hr>
    
    <p><br>

    Your application to sell or rent your residential has been rejected by the admin. This is because '.$row["reject_because"].'. Thank you for using our system. You are welcome to use it again but make sure you fill your residential with complete information.
    <p><br> 

    Thank You.<p><br> 

    Yours sincerely,<p><br> 

    <b>Admin</b><br>
    E-RENTED HOUSE SYSTEM
    
'; 

$mail->Subject = 'APPLICATION REJECTED'; 
$mail->Body    = $bodyContent; 

if(!$mail->send()) { 
    echo 'Message could not be sent.'; 
    echo 'Mailer Error: ' . $mail->ErrorInfo; 
} else { 
    echo 'Message has been sent'; 
    print '<meta http-equiv="refresh" content="0;URL=approvement.php">';
} 
?>
</body>
</html>