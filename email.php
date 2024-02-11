<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }

    .container {
        max-width: 400px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        margin-top: 0;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 8px;
    }

    input[type="text"] {
        padding: 8px;
        margin-bottom: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .error-message {
        color: #ff0000;
        margin-top: 8px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>Enter your email address:</h2>
        <form action="email.php" method="POST">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <input type="submit" value="Send" name="submit">
        </form>

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
    </div>
</body>

</html>