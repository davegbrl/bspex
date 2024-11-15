<!DOCTYPE html>
<html>
<head>
    <title>Orders Page</title>
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
            margin-bottom: -5px;
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


        #container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-image: url("formbg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 0 8px 10px rgba(0, 0, 0, 0.3), 0 4px 4px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
            margin-bottom: 40px;
            overflow-x: auto;
            position: relative;
        }

        #container h1 {
            font-family: 'Arial', sans-serif;
            color: #fff;
            text-align: center;
            margin-top: 0;
            background-color: #333;
            padding: 10px;
            border-radius: 4px;
        }

        #container p {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            text-align: center;
        }

        th#row-header {
            background-size: cover;
            background-color: #333;
            color: #fff;
        }

        td {
            font-weight: bold;
        }

        tr {
  height: 50px;
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

        .pagination {
            text-align: center;
            margin-top: 20px;
        }

        .pagination button {
            padding: 5px 10px;
            margin: 0 5px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            cursor: pointer;
        }

        .pagination button:hover {
            background-color: #d6d6d6;
        }

        .current-page {
            background-color: #d6d6d6;
        }
    </style>
</head>
<body>
    <div id="header">
    <h1>
        <a href="welcom.php">
            <img src="logoname.png" alt="Logo Name" class="logo-name">
        </a>
    </h1>
    <div class="navigation">
        <a href="itemchart.php" class="link">Item Chart</a>
        <a href="transaction.php" class="link">Transaction</a>
        <a href="orders.php" class="link">Orders</a>
        <a href="logout.php" class="logout-button">Logout</a>
    </div>
</div>


    <div id="container">
        </div>
</body>
</html>
