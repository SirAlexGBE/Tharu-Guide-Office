<?php
include 'connection.php';
if(isset($_GET['submit']))
{
    echo $a=$_GET['id1'];
    echo $b=$_GET['name1'];
    echo $c=$_GET['email1'];
    echo $d=$_GET['phone1'];
    echo $e=$_GET['Date1'];
    echo $f=$_GET['Activities1'];
    $query="update bookings set Name='$b', Email='$c', Phone='$d', Date='$e', Activities='$f' where ID='$a'";
    $run=mysqli_query($conn,$query);
    if($run)
    {
        header("location:reservation.php");
    }
    else
    {
        echo "<script>window.alert('Not updated')</script>";
    }

}
?>