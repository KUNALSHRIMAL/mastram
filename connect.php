<?php
    $uname=$_POST['text'];
    $num=$_POST['Number'];
    $dt=$_POST['time'];
    $ff=$_POST['ffid'];

    //database connection

    $conn = new mysqli('localhost','root','','gameport');
    if($conn->connect_error){
        echo("connection faild");
    }
    else{
        $stmt=$conn->prepare("INSERT INTO `contact` (`name`, `number`,`dt`, `ffid`) VALUES ( ?, ?, ?,?);");
        $stmt->bind_param("sisi",$uname,$num,$dt,$ff);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        echo '<script type ="text/javascript"> alert("Send Successfully!!");window.location= "index.html"</script>';
        
    }

?>