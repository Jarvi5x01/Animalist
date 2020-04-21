<?php
$host= 'localhost';
$user= 'root';
$pass= '';
$db= 'website';

$connect=mysqli_connect('localhost','root','','website');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

?>