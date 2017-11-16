<?php
$conn=mysqli_connect("localhost","root","","airline");
if(!$conn)
{
	echo mysqli_error($conn);
}
?>