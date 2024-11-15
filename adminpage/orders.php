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

        @media print {
            body {
                background: none;
            }

            #header,
            .navigation {
                display: none;
            }

            #container {
                margin-top: 0;
                margin-bottom: 0;
                border: none;
                box-shadow: none;
                overflow-x: hidden;
            }

            .pagination,
            .refresh-button,
            .print-button {
                display: none;
            }
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
        background-color: white;
        border: 0px solid black;
        overflow: hidden;
        margin-top: 20px;
        }

        th, td {
        text-align: left;
        padding: 1em;
        border: 1px solid #ccc;
        font-weight: bold;
        min-width: 60px;
        max-width: 100px;
        }

        td {
            height: 3em;
            white-space: normal;
            word-break: normal;
        }
        td:first-child, th:first-child {
            width: 11%;
            text-align: center;
        }
        td:nth-child(2), th:nth-child(2) {
            width: 30%;
        }
        td:nth-child(3), th:nth-child(3) {
            width: 15%;
        }
        td:nth-child(5), th:nth-child(5) {
            width: 12%;
            text-align: center;
        }
        th {
        text-align: center;
        background-size: cover;
        background-color: #333;
        color: #fff;
        }

        .refresh-button {
            width: 5%;
            height: 5%;
            position: fixed;
            bottom: 2%;
            right: 1%;
            padding: 5px 10px;
            background-color: #ffa300;
            color: white;
            font-weight: 700;
            text-transform: uppercase;
            border: 0px solid #ccc;
            border-radius: 4px;
            transition: 0.4s ease;
            cursor: pointer;
            z-index: 999;
        }

        .refresh-button:hover {
            background-color: #555;
            color: #d6d6d6;
        }

        .print-button {
            width: 5%;
            height: 5%;
            position: fixed;
            bottom: 8%;
            right: 1%;
            padding: 5px 10px;
            background-color: #ffa300;
            color: white;
            font-weight: 700;
            text-transform: uppercase;
            border: 0px solid #ccc;
            border-radius: 4px;
            transition: 0.4s ease;
            cursor: pointer;
            z-index: 999;
        }

        .print-button:hover {
            background-color: #555;
            color: #d6d6d6;
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
    <h1>Order List</h1>
    <div style="overflow-x: auto;">
        <table>
            <tr>
                <th>Ticket</th>
                <th>Item ID</th>
                <th>Quantities</th>
                <th>Subtotals</th>
                <th>Total</th>
            </tr>
            <?php
            $servername = "localhost:3306";
            $username = "root";
            $password = "";
            $dbname = "shazada";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM orders";
            $result1 = $conn->query($sql);

            $totalRows1 = $result1->num_rows;
            $rowsPerPage1 = 6;
            $totalPages1 = ceil($totalRows1 / $rowsPerPage1);

            if (!isset($_GET['page'])) {
                $currentPage1 = 1;
            } else {
                $currentPage1 = $_GET['page'];
                if ($currentPage1 < 1) {
                    $currentPage1 = 1;
                } elseif ($currentPage1 > $totalPages1) {
                    $currentPage1 = $totalPages1;
                }
            }

            $startRow = ($currentPage1 - 1) * $rowsPerPage1;
            $sql .= " LIMIT $startRow, $rowsPerPage1";

            $result1 = $conn->query($sql);

            if ($result1->num_rows > 0) {
                while ($row = $result1->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['ticket'] . "</td>";
                    if (strlen($row['item_id']) > 150) {
                        echo "<td class='wrap'>" . $row['item_id'] . "</td>";
                    } else {
                        echo "<td>" . $row['item_id'] . "</td>";
                    }
                    if (strlen($row['item_quantity']) > 150) {
                        echo "<td class='wrap'>" . $row['item_quantity'] . "</td>";
                    } else {
                        echo "<td>" . $row['item_quantity'] . "</td>";
                    }
                    if (strlen($row['item_subtotal']) > 150) {
                        echo "<td class='wrap'>" . $row['item_subtotal'] . "</td>";
                    } else {
                        echo "<td>" . $row['item_subtotal'] . "</td>";
                    }
                    echo "<td>&#8369;" . $row['total'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No Orders found.</td></tr>";
            }

            $conn->close();
            ?>
        </table>
    </div>
    <div class="pagination">
        <?php if ($totalPages1 > 1): ?>
            <?php if ($currentPage1 > 1): ?>
                <button onclick="window.location.href='orders.php?page=<?php echo $currentPage1 - 1; ?>'">Previous</button>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $totalPages1; $i++): ?>
                <button <?php if ($i == $currentPage1) echo 'class="current-page"'; ?>
                        onclick="window.location.href='orders.php?page=<?php echo $i; ?>'"><?php echo $i; ?></button>
            <?php endfor; ?>
            <?php if ($currentPage1 < $totalPages1): ?>
                <button onclick="window.location.href='orders.php?page=<?php echo $currentPage1 + 1; ?>'">Next</button>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <button class="refresh-button" onclick="location.reload()">Refresh</button>
    <button class="print-button" onclick="window.print()">Print</button>
</div>
</body>
</html>