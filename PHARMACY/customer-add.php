<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="nav2.css">
    <link rel="stylesheet" type="text/css" href="form4.css">
    <title>Add Customers
    </title>
    <link rel="icon" type="image/x-icon" href="icon.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
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
        <h2>MediCure Pharmacy </h2>
    </div>

    <div class="content">
    
            <div class="head">
                <h2>ADD CUSTOMER DETAILS</h2>
            </div>
        

        <div class="one">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cid">Customer ID:</label>
                        <input type="number" class="form-control" name="cid" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cfname">First Name:</label>
                        <input type="text" class="form-control" name="cfname" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="clname">Last Name:</label>
                        <input type="text" class="form-control" name="clname" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="age">Age:</label>
                        <input type="number" class="form-control" name="age" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="sex">Sex:</label>
                        <select class="form-control" id="sex" name="sex" required>
                            <option value="">Select</option>
                            <option>Female</option>
                            <option>Male</option>
                            <option>Others</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phno">Phone Number:</label>
                        <input type="number" class="form-control" name="phno" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="emid">Email ID:</label>
                        <input type="email" class="form-control" name="emid" required>
                    </div>
                </div>
                <button type="submit" name="add" class="btn btn-primary">Add Customer</button>
            </form>

            <?php
            include "config.php";

            if (isset($_POST['add'])) {
                $id = mysqli_real_escape_string($conn, $_REQUEST['cid']);
                $fname = mysqli_real_escape_string($conn, $_REQUEST['cfname']);
                $lname = mysqli_real_escape_string($conn, $_REQUEST['clname']);
                $age = mysqli_real_escape_string($conn, $_REQUEST['age']);
                $sex = mysqli_real_escape_string($conn, $_REQUEST['sex']);
                $phno = mysqli_real_escape_string($conn, $_REQUEST['phno']);
                $mail = mysqli_real_escape_string($conn, $_REQUEST['emid']);

                $sql = "INSERT INTO customer VALUES ($id, '$fname', '$lname', $age, '$sex', $phno, '$mail')";
                if (mysqli_query($conn, $sql)) {
                    echo "<div class='custom-alert alert-success'>Customer successfully added!</div>";
                } else {
                    echo "<div class='custom-alert alert-danger'>Error! Check details.</div>";
                }
            }

            $conn->close();
            ?>
        </div>
    </div>

    

</body>

</html>
