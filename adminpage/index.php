<?php
    include("connection.php");
    include("login.php");
?>

<html>
<head>
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #fc9402, #0968ff);
            background-size: 200% 100%;
            animation: gradientAnimation 5s linear infinite;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        #form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background: url('formbg.jpg') center/cover;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 0 8px 10px rgba(0, 0, 0, 0.3), 0 4px 4px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
            text-align: center;
        }

        #form img {
            max-width: 200px;
            height: auto;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .error-message {
            color: red;
            margin-bottom: 10px;
        }

        .password-container {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            background: none;
            border: none;
            padding: 0;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="form">
        <img src="logoname.png" alt="Custom Text">
        <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
            <label for="user">Administrator:</label>
            <input type="text" id="user" name="user"><br>
            <label for="pass">Password:</label>
            <div class="password-container">
                <input type="password" id="pass" name="pass">
                <button type="button" class="password-toggle" onclick="togglePasswordVisibility()">Show/Hide</button>
            </div>
            <input type="submit" id="btn" value="Login" name="submit">
            <div id="error" class="error-message"></div>
        </form>
    </div>
    <script>
        function isvalid() {
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if (user.trim() === "" && pass.trim() === "") {
                document.getElementById("error").textContent = "Administrator and password fields are empty!";
                return false;
            } else if (user.trim() === "") {
                document.getElementById("error").textContent = "Administrator field is empty!";
                return false;
            } else if (pass.trim() === "") {
                document.getElementById("error").textContent = "Password field is empty!";
                return false;
            }
        }

        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("pass");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
</body>
</html>
