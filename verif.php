<?php
        if(isset($_POST["submit"])) {
            if(isset($_POST["email"])) {
                $email = $_POST["email"];
                $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
                if(!preg_match($pattern, $email)) {
                    echo "<div class='error-message'>Please enter a valid email address </div>";
                } else {
                    
                    echo "<div>Your email is correct.</div>";
                }
            }
        }
        ?>
