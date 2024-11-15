<!DOCTYPE html>
<html>
<head>
    <title>Transanction Page</title>
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
        <h1>Transaction List</h1>
        <div style="overflow-x: auto;">
            <table>
                <tr>
                    <th id="row-header">Name</th>
                    <th id="row-header">Email</th>
                    <th id="row-header">Address</th>
                    <th id="row-header">City</th>
                    <th id="row-header">Postal Code</th>
                    <th id="row-header">Contact Number</th>
                    <th id="row-header">Total</th>
                    <th id="row-header">Payment Mode</th>
                    <th id="row-header">Created At</th>
                    <th id="row-header">Ticket</th>
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
                $result = $conn->query($sql);

                $totalRows = $result->num_rows;
                $rowsPerPage = 7;
                $totalPages = ceil($totalRows / $rowsPerPage);

                if (!isset($_GET['page'])) {
                    $currentPage = 1;
                } else {
                    $currentPage = $_GET['page'];
                    if ($currentPage < 1) {
                        $currentPage = 1;
                    } elseif ($currentPage > $totalPages) {
                        $currentPage = $totalPages;
                    }
                }

                $startRow = ($currentPage - 1) * $rowsPerPage;
                $sql .= " LIMIT $startRow, $rowsPerPage";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['city'] . "</td>";
                        echo "<td>" . $row['postal_code'] . "</td>";
                        echo "<td>" . $row['contact_number'] . "</td>";
                        echo "<td>&#8369;" . $row['total'] . "</td>";
                        echo "<td>" . $row['payment_mode'] . "</td>";
                        echo "<td>" . $row['created_at'] . "</td>";
                        echo "<td>" . $row['ticket'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='11'>No Transaction found.</td></tr>";
                }

                $conn->close();
                ?>
            </table>
        </div>
        <div class="pagination">
            <?php if ($totalPages > 1): ?>
                <?php if ($currentPage > 1): ?>
                    <button onclick="window.location.href='transaction.php?page=<?php echo $currentPage - 1; ?>'">Previous</button>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <button <?php if ($i == $currentPage) echo 'class="current-page"'; ?> onclick="window.location.href='transaction.php?page=<?php echo $i; ?>'"><?php echo $i; ?></button>
                <?php endfor; ?>
                <?php if ($currentPage < $totalPages): ?>
                    <button onclick="window.location.href='transaction.php?page=<?php echo $currentPage + 1; ?>'">Next</button>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <button class="refresh-button" onclick="location.reload()">Refresh</button>
        <button class="print-button" onclick="window.print()">Print</button>
    </div>
</body>
</html>
