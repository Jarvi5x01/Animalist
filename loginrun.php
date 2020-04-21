<?php include 'db.php';?>
<?php
$username=$_POST['username'];
$password=$_POST['password'];

mysqli_query($connect,"INSERT into login(username,password) 
            VALUES('$username','$password')");

if(mysqli_affected_rows($connect)>0)
{
    echo "<p>sign in completed</p>";
    mysqli_query($connect,"select * from login");
    echo
    "+----------------------------+<br>";
    echo "<a href='html_form.php'>Continue.</a>";
}

else{
    echo "login Failed";
    echo mysqli_error($connect);
}
?>