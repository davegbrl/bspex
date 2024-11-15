<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

        #header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-image: url("formbg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            border-bottom: 1px solid #ccc;
        }

        #header h1 {
            margin: 0;
            display: flex;
            align-items: center;
        }

        #header .logo-name {
            height: 30px;
        }

        .navigation {
            display: flex;
            gap: 10px;
        }

        .link {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            background-image: url("buttonbg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .link:hover {
            background-color: #d6d6d6;
            filter: brightness(80%);
        }

        .logout-button {
            padding: 10px 20px;
            background-image: url("buttonbg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            text-decoration: none;
            color: #fff;
        }

        .logout-button:hover {
            background-color: #d6d6d6;
            filter: brightness(80%);
        }

        .transaction-button {
            padding: 10px 20px;
            background-image: url("buttonbg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            text-decoration: none;
            color: #fff; 
        }

        .transaction-button:hover {
            background-color: #d6d6d6;
            filter: brightness(80%);
        }

        .itemchart-button {
            padding: 10px 20px;
            background-image: url("buttonbg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            text-decoration: none;
            color: #fff; 
        }

        .itemchart-button:hover {
            background-color: #d6d6d6;
            filter: brightness(80%);
        }

        #container {
            max-width: 800px;
            margin: 0 auto;
            padding: 60px;
            background-image: url("formbg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 0 8px 10px rgba(0, 0, 0, 0.3), 0 4px 4px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
            margin-bottom: 40px;
            text-align: center;
        }

         #container h1,
        #container p {
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        #container p {
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
    <div id="header">
        <h1>
            <img src="logoname.png" alt="Logo Name" class="logo-name">
        </h1>
        <div class="navigation">
            <a href="itemchart.php" class="link">Item Chart</a>
            <a href="transaction.php" class="link">Transaction</a>
            <a href="orders.php" class="link">Orders</a>
            <a href="logout.php" class="logout-button">Logout</a>
        </div>
    </div>

      <div id="container">
        <hr>
        <P style="font-size: 69px; font-weight: bold; color: #FF8000;">ANNOUNCEMENT BOARD</P>
        <hr>
        <h2>Welcome to <span style="background-image: linear-gradient(to right, #fc9402, #0968ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Shazada</span> Admin Panel</h2>

        <hr>
        <p style="font-size: 18px; font-weight: bold; color: #FF8000;">Attention Administrators!</p>
        <p style="font-size: 16px; font-weight: bold;">In this platform, you can revolutionize your order management experience. This comprehensive tool has been meticulously designed to provide you with unparalleled visibility and control over every aspect of our ordering system.</p>

        <p style="font-size: 16px; font-weight: bold;">With the Shazada Admin Panel at your fingertips, you will gain access to a wealth of information and features that will empower you to effectively monitor and oversee the entire order process.
        </p>

       <hr>

       <p style="font-size: 18px; font-weight: bold; color: #FF8000;">Usage of the buttons in the transaction/order page:</p>

        <p style="font-size: 16px; font-weight: bold;"> = Click the logo name if you want to return to the announcement board. </p>
        <p style="font-size: 16px; font-weight: bold;"> = Click "Print" to print the current page of the order list. </p>
        <p style="font-size: 16px; font-weight: bold;"> = Click the "Refresh" button to update the table and view new incoming orders. </p>
        
        <hr>
    </div>
</body>
</html>
