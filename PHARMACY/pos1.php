<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    include "config.php";
    ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="nav2.css">
    <link rel="stylesheet" type="text/css" href="form4.css">
    <link rel="stylesheet" type="text/css" href="nav2.css">
    <link rel="stylesheet" type="text/css" href="form3.css">
    <link rel="stylesheet" type="text/css" href="table2.css">
    <title>Add Point of Sales
    </title>
    <link rel="icon" type="image/x-icon" href="icon.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .container {
            margin: auto;
            width: 80%;
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }
        .error-message {
            color: red;
            font-size: 14px;
            font-weight: bold;
            margin-top: 10px;
        }
        /* Custom styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .sidenav {
            height: 100vh;
            width: 300px;
            background-color: #3D2B3A;
            overflow-y: auto;
            position: fixed;
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .topnav {
            background-color: #3D2B3A;
            color: white;
            padding: 10px;
            position: fixed;
            width: 100%;
            z-index: 1;
            float: right;
            padding-right: 80px;
        }

        .topnav h2 {
            color: white;
            text-align: left;
            margin: 0;
        }

        .topnav h3 {
            color: white;
            text-align: right;
            margin: 0;
        }

        .content {
            margin-top: 60px;
            padding-left: 260px;
        }

        
        

        /* Custom styles for alerts */
        .custom-alert {
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
            display: none; /* Initially hidden */
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* Additional input styles */
        input[type="text"],
        input[type="number"],
        select {
            width: 100%; /* Full width */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border 0.3s;
        }

        input[type="submit"] {
            background-color: #7E60BF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #6A4E9A;
        }
    </style>
    <script>
        $(document).ready(function() {
            // Add hover effect to the navigation buttons
            $(".dropdown-btn").hover(function() {
                $(this).css("background-color", "#7E60BF");
                $(this).css("color", "white"); // Change text color on hover
            }, function() {
                $(this).css("background-color", "");
                $(this).css("color", ""); // Reset text color
            });

            // Dropdown functionality with animation
            $(".dropdown-btn").click(function() {
                $(this).toggleClass("active");
                $(this).next(".dropdown-container").slideToggle(300); // Slide down/up animation
            });
        });
    </script>
</head>

<body>

    <div class="sidenav">
        <a href="adminmainpage.php">Dashboard</a>
        <button class="dropdown-btn">Inventory
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="inventory-add.php">Add New Medicine</a>
            <a href="inventory-view.php">Manage Inventory</a>
        </div>
        <button class="dropdown-btn">Suppliers
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="supplier-add.php">Add New Supplier</a>
            <a href="supplier-view.php">Manage Suppliers</a>
        </div>
        <button class="dropdown-btn">Stock Purchase
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="purchase-add.php">Add New Purchase</a>
            <a href="purchase-view.php">Manage Purchases</a>
        </div>
        <button class="dropdown-btn">Employees
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="employee-add.php">Add New Employee</a>
            <a href="employee-view.php">Manage Employees</a>
        </div>
        <button class="dropdown-btn">Customers
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="customer-add.php">Add New Customer</a>
            <a href="customer-view.php">Manage Customers</a>
        </div>
        <a href="sales-view.php">View Sales Invoice Details</a>
        <a href="salesitems-view.php">View Sold Products Details</a>
        <a href="pos1.php">Add New Sale</a>
        <button class="dropdown-btn">Reports
            <i class="down"></i>
        </button>
        <div class="dropdown-container">
            <a href="stockreport.php">Medicines - Low Stock</a>
            <a href="expiryreport.php">Medicines - Soon to Expire</a>
            <a href="salesreport.php">Transactions Reports</a>
        </div>
    </div>

    <div class="topnav">
        <h3><a href="logout.php" style="color: white;">Logout</a></h3>
        <h2>Pharmacy Management System</h2>
    </div>

    <div class="content">
    
            <div class="head">
                <h2>Point of Sale Details</h2>
            </div>
        

       
	
	<?php


// Ensure session variable is set
if (!isset($_SESSION['user'])) {
    die("User session not found.");
}

// Function to sanitize input
function sanitize_input($data, $conn) {
    return htmlspecialchars(mysqli_real_escape_string($conn, $data));
}

// Displaying any errors for debugging (remove in production)
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>


   


<div class="container">
   
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="cid">Customer ID:</label>
        <select id="cid" name="cid">
            <option value="0" selected>*Select Customer ID</option>
            <?php
            $qry = "SELECT c_id FROM customer";
            $result = $conn->query($qry);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option>" . sanitize_input($row["c_id"], $conn) . "</option>";
                }
            }
            ?>
        </select>
        <input type="submit" name="custadd" value="Add to Proceed">
    </form>

    <?php
    if (isset($_POST['custadd']) && !empty($_POST['cid'])) {
        $cid = sanitize_input($_POST['cid'], $conn);
        $qry1 = "SELECT id FROM admin WHERE a_username = ?";
        $stmt = $conn->prepare($qry1);
        $stmt->bind_param("s", $_SESSION['user']);
        $stmt->execute();
        $stmt->bind_result($eid);
        $stmt->fetch();
        $stmt->close();

        $qry2 = "INSERT INTO sales (c_id, e_id) VALUES (?, ?)";
        $stmt2 = $conn->prepare($qry2);
        $stmt2->bind_param("ii", $cid, $eid);

        if ($stmt2->execute()) {
            echo "<p>Customer added successfully.</p>";
        } else {
            echo "<p class='error-message'>Error: Invalid Customer ID.</p>";
        }
        $stmt2->close();
    }
    ?>

    <form method="post">
        <label for="med">Medicine:</label>
        <select id="med" name="med">
            <option value="0" selected>Select Medicine</option>
            <?php
            $qry3 = "SELECT med_name FROM meds";
            $result3 = $conn->query($qry3);
            if ($result3->num_rows > 0) {
                while ($row = $result3->fetch_assoc()) {
                    echo "<option>" . sanitize_input($row["med_name"], $conn) . "</option>";
                }
            }
            ?>
        </select>
        <input type="submit" name="search" value="Search">
    </form>

    <?php
    if (isset($_POST['search']) && !empty($_POST['med'])) {
        $med = sanitize_input($_POST['med'], $conn);
        $qry4 = "SELECT * FROM meds WHERE med_name = ?";
        $stmt = $conn->prepare($qry4);
        $stmt->bind_param("s", $med);
        $stmt->execute();
        $result4 = $stmt->get_result();
        if ($row4 = $result4->fetch_assoc()) {
            // Display results
        }
        $stmt->close();
    }
    ?>
</div>
    </div>

    

</body>

</html>
