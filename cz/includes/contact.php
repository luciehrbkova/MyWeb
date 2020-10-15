

<!-- contact form ******************************************************--> 
<?php
    $action=$_REQUEST['action'];
    $url;

    if ($action=="")    /* display the contact form */

        {
        ?>
        <!-- <p class="white" id="emailMessage2">Thank you for your message!<br><br>You will hear from me soon.<br><br>Lucie</p> -->
        <form action="<?=$url;?>" id="form"  method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="submit">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="jméno" required>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="email" required>
            <label for="message">Message</label>
            <input type="text" name="message" id="message" placeholder="Vaše zpráva..." class="message" required>
            <input type="submit" value="SEND" class="form_button_black" id="form_button">
        </form>
        <?php
        } 
        else                /* send the submitted data */
        {
            $name=$_REQUEST['name'];
            $email=$_REQUEST['email'];
            $message=$_REQUEST['message'];

            if (($name=="")||($email=="")||($message==""))
            {
                echo "<p class=\"white emailMessage\">All fields are required, please fill <a href=\"\">the form</a> again.</p>";
            }
            else
            {		
                $from="From: $name<$email>\r\nReturn-path: $email";
                $subject="LUCIEWEB.DEV message from web";
                mail("hrbkova.lucka@gmail.com", $subject, $message, $from);
                echo "<p class=\"white emailMessage\" id=\"finalMessage\">Thank you for your message!<br><br>You will hear from me soon.<br><br>Lucie</p>";
            }
        }  
?>
