<?php 

    $name=$_POST['username'];
    $mailfrom=$_POST['mail'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $mailto="coindia19@gmail.com";
    $headers="From :".$mailfrom;
    $txt="you have recived an email from".$name.".\n\n".$message;

    
    
    if(mail($mailto,$subject,$txt,$headers)){
        ?><script>alert('Message sent');</script><?php
        
    }
    else{
        ?><script>alert('not send');</script><?php
    }

    header("location : http://localhost/corona%20virus/index.php?message sent");

?>