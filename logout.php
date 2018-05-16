<?php
// set the expiration date to one hour ago
setcookie("ic_no", "", time() - 3600);
?>
<html>
<body>

<?php
	echo '<script language = "JavaScript">alert("You have been Log Out!")</script>';
	print '<meta http-equiv="refresh" content="0;URL=index.php">';
?>

</body>
</html>