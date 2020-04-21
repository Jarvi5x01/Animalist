<?php include 'db.php';?>
<?php
//create a variable
$Full_Name=$_POST['Full_Name'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$username=$_POST['username'];
$password=$_POST['password'];

mysqli_query($connect,"INSERT into signup(Full_Name, Email, Phone, username, password)
            VALUES('$Full_Name','$Email','$Phone','$username','$password')");

if(mysqli_affected_rows($connect)>0){
    echo "<p>Registration Completed</p>";
    mysqli_query($connect, "select * from 'signup'");
    echo "+-------------------------------------+<br>";
    echo "<a href='main.php'>Continue</a>";
}
else{
    echo "Registration Failed!";
    echo mysqli_error($connect);
}
?>