<?php

	$username = "root";
	$password = "";
	$hostname = "localhost";


	$con = mysql_connect($hostname, $username, $password) or die("Could not connect to database");

	mysql_select_db("e_rented_house", $con); 

	if(!empty($_POST['ic_no']) && !empty($_POST['password']))
	{
		$ic_no = mysql_real_escape_string($_POST['ic_no']);
		$password = mysql_real_escape_string($_POST['password']);
		$query = mysql_query('SELECT * FROM user WHERE ic_no = "'.$ic_no.'"');
		$numrow = mysql_num_rows($query);
		
		if($numrow!=0)
		{
			while($row = mysql_fetch_assoc($query))
			{
				$db_ic_no = $row['ic_no'];
				$db_password = $row['password'];
				$db_usertype = $row['user_type'];
			}
		
			if(($ic_no==$db_ic_no) && ($password==$db_password) && ($db_usertype!='Admin'))
			{
				setcookie('ic_no',"$ic_no");
				session_start();	
				header("location:index.php");
				
			}
			
			if(($ic_no==$db_ic_no) && ($password==$db_password) && ($db_usertype=='Admin'))
			{
				setcookie('ic_no',"$ic_no");
				session_start();
				header("location:admin.php");
			}
			else
			{
				//header("location:login.php?feedback=Incorrect Password");
				echo '<script language = "JavaScript">alert("USER NOT FOUND OR INCORRECT PASSWORD!")</script>';
				print '<meta http-equiv="refresh" content="0;URL=account.php">';
			} 	
		}
		else
		{
			//header("location:login.php?feedback=User Doesnt Exist");
			echo '<script language = "JavaScript">alert("USER NOT FOUND OR INCORRECT PASSWORD!")</script>';
				print '<meta http-equiv="refresh" content="0;URL=account.php">';
		}
	}
	else
	{
		//header("location:login.php?feedback=All Fields Are Required");
		echo '<script language = "JavaScript">alert("ALL FORM MUST BE FILLED IN")</script>';
				print '<meta http-equiv="refresh" content="0;URL=account.php">';


	}



?>