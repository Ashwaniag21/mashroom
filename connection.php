<?php
$con = mysqli_connect("localhost","root","","form");
if($con)
{
    echo "<script>alert('connection successfull')</script>";
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $message = trim($_POST['message']); 
        $sql = "insert into ms values('$name','$email','$number','$message')";
        $result = mysqli_query($con,$sql);
        if($result)
        {
            echo "<script>alert('insert')</script>";  
        }
        else
        {
            echo "<script>alert('failed')</script>";
        }
    }
}
else
{
    die("connection failed". mysqli_connect_error());
}
?>