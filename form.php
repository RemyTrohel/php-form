<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>My formulaire</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

    <?php
        $lastnameErr = $firstnameErr = $emailErr = $phoneErr = $messageErr = "";
        $lastname = $firstname = $email = $phone = $message = "";
        if(isset($_POST["user_submit"])) {
            if (empty($_POST["user_lastname"])) {
                $lastnameErr = "Lastname is required";
            } else {
                $lastname = test_input($_POST["user_lastname"]);
                if (strlen($lastname) == 0) {
                    $lastnameErr = "Lastname is required";
                }
                else if (!preg_match("/^[A-Za-zÀ-ÖØ-öø-ÿ -]*$/",$lastname)) {
                    $lastnameErr = "Only letters, '-' and white space allowed";
                }
            }

            if (empty($_POST["user_firstname"])) {
                $firstnameErr = "Firstname is required";
            } else {
                $firstname = test_input($_POST["user_firstname"]);
                if (strlen($firstname) == 0) {
                    $firstnameErr = "Firstname is required";
                }
                else if (!preg_match("/^[A-Za-zÀ-ÖØ-öø-ÿ -]*$/",$firstname)) {
                    $firstnameErr = "Only letters, '-' and white space allowed";
                  }
            }

            if (empty($_POST["user_email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["user_email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

            if (empty($_POST["user_phone"])) {
                $phoneErr = "Phone is required";
            } else {
                $phone = test_input($_POST["user_phone"]);
                if (!preg_match("/^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/", $phone)) {
                    $phoneErr = "Invalid phone number format";
                }
            }

            if (empty($_POST["user_message"])) {
                $messageErr = "Message is required";
            } else {
                $message = test_input($_POST["user_message"]);
                if (strlen($message) == 0) {
                    $messageErr = "Message is required";
                }
            }

            if (empty($_POST["user_message"])) {
                $messageErr = "Message is required";
            } else {
                $message = test_input($_POST["user_message"]);
                if (strlen($message) == 0) {
                    $messageErr = "Message is required";
                }
            }

            if ($lastnameErr == "" && 
                $firstnameErr == "" && 
                $emailErr == "" && 
                $phoneErr == "" && 
                $messageErr == "") {
                    header("Location: http://localhost:8000/success.php");
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <p class="success">Formulaire</p>
        <p><span class="error">* required field</span></p>
            <div>
                <label for="lastname">Lastname :</label>
                <input type="text" id="name" name="user_lastname" required>
                <span class="required"> * </span>
                    <br>
                <span class="error"><?php echo $lastnameErr;?></span>
            </div>
            <div>
                <label for="firstname">Firstname :</label>
                <input type="text" id="firstname" name="user_firstname" required>
                <span class="required"> * </span>
                    <br>
                <span class="error"><?php echo $firstnameErr;?></span>
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="email" id="email" name="user_email" required>
                <span class="required"> * </span>
                    <br>
                <span class="error"><?php echo $emailErr;?></span>
            </div>
            <div>
                <label for="phone">Phone :</label>
                <input type="tel" id="phone" name="user_phone" required>
                <span class="required"> * </span>
                    <br>
                <span class="error"><?php echo $phoneErr;?></span>
            </div>
            <div>
                <label for="subject">Subject :</label>
                <select id="subject" name="user_subject" size="1" required>
                    <option value="" selected disabled>Select an option</option> 
                    <option value="complaint">Complaint</option> 
                    <option value="question">Question</option> 
                    <option value="improvement">Improvement</option> 
                    <option value="bug">Bug</option> 
                </select>
            </div>
            <div>
                <label for="message">Message :</label>
                <textarea id="message" name="user_message" required></textarea>
                <span class="required"> * </span>
                    <br>
                <span class="error"><?php echo $messageErr;?></span>
            </div>
            <div class="button">
                <button type="submit" name="user_submit">Send your message</button>
            </div>
        </form>

    </body>
</html>