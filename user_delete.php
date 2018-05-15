<?php
  $link = mysql_connect("localhost","root","") or die(mysql_error());
          mysql_select_db("e_rented_house") or die(mysql_error());
 
  if(isset($_GET['fullname']))
  {
    $fullname=$_GET['fullname'];
    $query1=mysql_query("delete from user where fullname='$fullname'");
    
    if($query1)
      {
        echo '<script language = "JavaScript">alert("Delete Successfully")</script>';
        print '<meta http-equiv="refresh" content="0;URL=admin.php">';
      }
  }
?>