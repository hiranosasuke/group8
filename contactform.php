<?php
    
    if (isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];
        //You can change email to your working server. Just an example
        $mailTo = "glouis60@Knights.ucf.edu";
        $headers = "From: ".$mailFrom;
        $txt = "You have received an e-mail from ".$name.".\n\n".$message;
    
        mail($mailTo,$subject,$txt,$headers);
        header("Location: index.php?mailsend");
        
        
    }