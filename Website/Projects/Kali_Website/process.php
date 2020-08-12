<?php ob_start();


        if(isset($_POST['submit'])) {
            
            
                $to = "kalimarsh98@yahoo.com";
                $email = $_POST['email'];
                $txt = $_POST['message'];
                $subject = $_POST['subject'];
                $headers = "From:  {$email}" . "\r\n" .
                "CC: marshk2@nku.edu";
            
                mail($to, $subject, $txt, $headers);
            
                header("Location: contact.html");
                
        }
        


?>