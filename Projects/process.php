<?php


        if(isset($_POST['submit'])) {
            
            
                $to = "info@rosewoodcoast.com";
                $message = $_POST['message'];
                $subject = $_POST['subject']
                $txt = $_POST['message']
                $email = $_POST['email'];
                $headers = "From:  .{$email}" . "\r\n" .
                "CC: zsempsrott@yahoo.com";
            
                mail($to,$subject,$txt,$headers);
            
                header("Location: RC_Contact.html")
            
            echo $subject;
            
                
            
            
        }
        





?>