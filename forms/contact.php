<?php
            require_once "Mail.php";

            $host = "smtp.gmail.com";
            $username = "shekhar_katagi@3sitconsultingservices.com";
            $password = "Ganesh_2021";
            $port = "587";
            $to = "sam@samdevelopers.co.in";

            $email_from = "shekhar_katagi@3sitconsultingservices.com";
            $email_subject = $_POST['subject'] ;
            $email_body = $_POST['message'] ;
            $email_address = $_POST['email'];
            $content = "text/html; charset=utf-8";
            $mime = "1.0";

            $headers = array ('From' => $email_from,
                            'To' => $to,
                            'Subject' => $email_subject,
                            'Reply-To' => $email_address,
                            'MIME-Version' => $mime,
                            'Content-type' => $content);

            $params = array  ('host' => $host,
                            'port' => $port,
                            'auth' => true,
                            'username' => $username,
                            'password' => $password);

            $smtp = Mail::factory ('smtp', $params);
            $mail = $smtp->send($to, $headers, $email_body);

            if (PEAR::isError($mail)) {
            echo("<p>" . $mail->getMessage() . "</p>");
            } else {
            echo("<p>Message sent successfully!</p>");
            }
        ?>
