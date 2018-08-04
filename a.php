<?php 
  include('connect.php');
  session_start();

  // $_SESSION['ic_no'] = $_GET['ic_no'];
  $ic_no = $_SESSION['ic_no'];
  echo $ic_no;
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

        $username = "root"; 
        $password = ""; 
        $hostname = "localhost"; 


        $con = ($GLOBALS["___mysqli_ston"] = mysqli_connect($hostname,  $username,  $password)) or die("Could not connect to database"); 

        ((bool)mysqli_query( $con, "USE " . postgraduateapp2));  
        $sql = "SELECT i.* , m.* , u.* , q.* FROM student i , faculty m , program u , supervisor q WHERE i.ic_no=u.ic_no and m.faculty_id=u.faculty_id and m.faculty_id=q.faculty_id"; 



        $result = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); 
        $rowcheckroute = mysqli_num_rows($result); 
        $row = mysqli_fetch_array($result); 

        $full_name = $row["full_name"]; 
        $per_address = $row["per_address"]; 
        $per_phone_no = $row["per_phone_no"]; 
        $cor_email = $row["cor_email"]; 
        $program_mode = $row["program_mode"]; 
        $faculty_name = $row["faculty_name"]; 
        $mode_study = $row["mode_study"]; 
        $field_specialization = $row["field_specialization"]; 
        $program_name = $row["program_name"]; 
        $program_study = $row["program_study"]; 
        $search_title = $row["search_title"]; 
        $cor_email = $row["cor_email"]; 
        $date=date("d M Y"); 

require 'PHPMailer/PHPMailerAutoload.php'; 

$mail = new PHPMailer; 

$mail->isSMTP();                                   // Set mailer to use SMTP 
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;                            // Enable SMTP authentication 
$mail->Username = 'nazmiyakob1994@gmail.com';          // SMTP username 
$mail->Password = 'nazmiyakob94'; // SMTP password 
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 587;                                 // TCP port to connect to 

$mail->setFrom('nazmiyakob1994@gmail.com', 'Nazmi');    //sender 
$mail->addReplyTo($cor_email, $full_name); // recipient 
$mail->addAddress($cor_email);   // Add a recipient 
//$mail->addCC('cc@example.com'); 
//$mail->addBCC('bcc@example.com'); 

$mail->isHTML(true);  // Set email format to HTML 

$bodyContent = ' 


<table> 
            <tr> 
                <td rowspan="4"> <img src="Jata-Negara.png" height="40%" width="15%"><img src="UTeM.png" height="25%" width="20%"> 
                <td><b> Universiti Teknikal Malaysia Melaka <br> 
                <td> Tel : +606 555 2000 
            </tr> 

            <tr> 
                <td><b> Hang Tuah Jaya, </td> 
                <td> Fax : +606 331 6247 <br></td>         
            </tr> 

            <tr> 
                <td><b> 76100, Durian Tunggal, </td> 
                <td> www.utem.edu.my </td>         
            </tr> 
              
            <tr> 
                <td><b> Melaka, Malaysia </td>                 
            </tr> 
        </table> 
         
        <p><hr><br> 

        <center><b> CENTER FOR GRADUATE STUDIES </b><br> 
        Tel  : +606 555 2000 | Fax  : +606 331 6247 </center> 

        <p> Our Ref : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>UTeM 29.02/600</b> 
        <p> Your Ref : 
        <div align="right">'.strip_tags($date).'</div> 
         

        <p><br><p><p class="uppercase"> '.$row["full_name"].', 
        <br> '.$row["per_address"].', 
        <br> '.$row["per_postcode"].', 
        <br> '.$row["per_city"].', 
        <br> '.$row["per_state"].'. 
        <p><br> 

        <b> OFFER OF ADMISSION </b> 

        <p> 

        <div align="justify">Congratulation! We are pleased to inform that your application for admission into the <b>'.$row["program_study"].'</b> at Universiti Teknikal Malaysia Melaka (UTeM) has been successful. The details of the programme are as follows :-</div><p> 

        <table>  

        <tr>  
            <td width="30%"> Faculty 
            <td> : 
            <td><p class="capitalize"> '.$row["faculty_name"].' 
        </tr> 
        <tr>  
            <td> Programme  
            <td> : 
            <td><p class="capitalize"> '.$row["program_name"].' 
        </tr> 
        <tr>  
            <td> Mode of Study  
            <td> : 
            <td><p class="capitalize"> '.$row["program_mode"].' 
        </tr> 
        <tr>  
            <td> Intake  
            <td> : 
            <td> <p class="capitalize">  
        </tr> 
        <tr>  
            <td> Type of Registration 
            <td> : 
            <td> <p class="capitalize"> '.$row["mode_study"].' 
        </tr> 
        <tr>  
            <td> Duration of study  
            <td> : 
            <td> <p class="capitalize">  
        </tr> 
        <tr>  
            <td> Date of Registration  
            <td> : 
            <td> <p class="capitalize"> 
        </tr> 
        <tr> 
            <td> Place of Registration  
            <td> : 
            <td> <p class="capitalize"> 
        </tr> 
        </table    > 
        <p> 
        <div align="justify"> 2. This offer is also subject to the issuance of a valid Student Pass from the Malaysian Immigration Department in order to apply for the Student Pass you are required to submit the documents listed is <b>Appex 1</b>. Please take note that all expenses pertaining to any immigration matters (including the issuance of Student Pass and Visa) shall be borne by you.</div><p> 

        <div align="justify"> 3. Should you accept this offer, please complete and return to us the enclosed Acception Form together with the documents listed in <b>Appex 1 <u>within two (2) weeks from the date of this letter.</u></b> The University shall then proceed to apply to the Immigration Department of Malaysia for your Student Pass. Upon approval of this application, the Immigration Department of Malaysia will issue a “Letter of Approval for Foreign Students Studying in Malaysia”. UTeM will send a copy of this document to you and there after you can make arrangements to travel to Malaysia. <b>Please be advised that under no circumstance should you enter Malaysia without this &#34;Letter of Approval for Foreign Students Studying in Malaysia&#34;.</b></div><p> 

        <div align="justify"> 4. Before your departure to Malaysia you are also required to apply for a single entry visa / pass from the Malaysian High Commissioner or Embassy in your country. Residents of South America and Africa are further required to possess  a valid immunisation certificate for Yellow Fever. Students from  these two regions are, therefore, required to obtain the vaccination and immunisation certificates not less than ten (10) days before entering Malaysia. The health regulations of Malaysia require those arriving from these two regions without the valid immunisation certificates or the inoculation period to be immediately quarantined for a period deemed necessary by the health authorities.</div><p> 

        <div align="justify"> 5. <b>Kindly inform UTeM one (1) week in advance of your fight no, arrival date and time so that we can meet you at the Kuala Lumpur international Airport (KLIA).</b> Please be inform that registration for the offered academic programme will take place on the day and place specified above. Remember to bring along the following document for registration.</div><p> 

        <ul> 
            <li>Passport 
            <li>Original copy of offer letter 
            <li>Original Certificates and Transcript 
            <li>Scholarship Letter from the sponsor. (if sponsored) 
            <li>Money Order or bank Draff for the sum of RM4,387.00 made payable to &#34;Bendahari UTeM&#34; for the payment of course fees. 
        </ul> 

        <div align="justify">6. Please take note that the conversion of a Visitor Pass into a Student Visa is strictly not allowed by the Immigration Department of Malaysia.</div><p> 

        <div align="justify">This offer shall remain valid for a period of one (1) year from the date of this letter. The University has the right to change the terms and condition imposed from time to time. We wish to congratulate you for your successful application and look forward to seeing you at UTeM.</div><br> 
         
        Thank You.<p><br> 

        Yours sincerely,<p><br> 

        <b>PROF. DR ZULKIFLIE BIN IBRAHIM</b><br> 
        Dean<br> 
        Centre for Graduate Studies<br> 
        Universiti Teknikal Malaysia Melaka<p> 


        c.c Deputy Vice Chancellor (Academic & International)<br> 
        Dean, Faculty Of Information And Communication Technology<br> 
        International Office<br> 
        Chief Executive Officer, UTeM Holdings Sdn. Bhd.<br> 
        Student File 


'; 

$mail->Subject = 'OFFER LETTER'; 
$mail->Body    = $bodyContent; 

if(!$mail->send()) { 
    echo 'Message could not be sent.'; 
    echo 'Mailer Error: ' . $mail->ErrorInfo; 
} else { 
    echo 'Message has been sent'; 
} 
?>
</body>
</html>