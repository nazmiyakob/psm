<html lang="ms-MY">
	<head>
		<title>APPLICATION REJECTED</title>
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


		$con = mysql_connect($hostname, $username, $password) or die("Could not connect to database");

		mysql_select_db("postgraduateapp2", $con); 
		$sql = "SELECT i.* , m.* , u.* , q.* FROM student i , faculty m , program u , supervisor q WHERE i.ic_no=u.ic_no and m.faculty_id=u.faculty_id and m.faculty_id=q.faculty_id";
		$sql2 = "SELECT * from student ";



		$result = mysql_query($sql) or die(mysql_error());
		$result2 = mysql_query($sql2) or die(mysql_error());
		$rowcheckroute = mysql_num_rows($result);
		$row = mysql_fetch_array($result);
		$row2 = mysql_fetch_array($result2);

		$full_name = $row2['full_name'];
		$per_address = $row2['per_address'];
		$per_phone_no = $row2['per_phone_no'];
		$cor_email = $row2['cor_email'];
		$program_mode = $row['program_mode'];
		$faculty_name = $row['faculty_name'];
		$mode_study = $row['mode_study'];
		$field_specialization = $row['field_specialization'];
		$program_name = $row['program_name'];
		$program_study = $row['program_study'];
		$search_title = $row['search_title'];
		$date=date("d M Y");

	?>
		<center><h1><b> APPLICATION REJECTED </b></h1><br></center><hr>
		
		<p><br>

		Your application to sell or rent your residential has been rejected by the admin. This is because __________. Thank you for using our system. You are welcome to use it again but make sure you fill your residential with complete information.
		<p><br> 

		Thank You.<p><br> 

        Yours sincerely,<p><br> 

        <b>name admin</b><br> 
        Admin



	</body>
</html>