<?php
if (!isset($_SESSION['email'] )) {
	echo "<script> alert('Please Log In');
		window.location.href='customerforms.php';
		</script>";
}
/*if (!isset($_SESSION['password'] )) {
	echo "<script> alert('Please Log In');
		window.location.href='customerforms.php';
		</script>";
}*/





?>