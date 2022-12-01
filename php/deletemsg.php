<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = $_SESSION['incoming_id'];
        $time=mysqli_real_escape_string($conn, $_POST['time']);
        $sql="DELETE FROM messages WHERE `timestamp` < (NOW() - INTERVAL 1 MINUTE) and outgoing_msg_id='$outgoing_id' and incoming_msg_id='$incoming_id' ";
        mysqli_query($conn,$sql);
        header("Location: ../users.php");


    }else{
        header("location: ../login.php");
    }


    
?>