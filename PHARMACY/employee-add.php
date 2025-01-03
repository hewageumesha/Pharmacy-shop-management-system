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
        <h2>Pharmacy Management System</h2>
    </div>

    <div class="content">
    
            <div class="head">
                <h2>Add Employee Details</h2>
            </div>
        
			<div class="one row">
	
	<?php
	
		include "config.php";
		 
		if(isset($_POST['add']))
		{
		$id = mysqli_real_escape_string($conn, $_REQUEST['eid']);
		$fname = mysqli_real_escape_string($conn, $_REQUEST['efname']);
		$lname = mysqli_real_escape_string($conn, $_REQUEST['elname']);
		$bdate = mysqli_real_escape_string($conn, $_REQUEST['ebdate']);
		$age = mysqli_real_escape_string($conn, $_REQUEST['eage']);
		$sex = mysqli_real_escape_string($conn, $_REQUEST['esex']);
		$etype = mysqli_real_escape_string($conn, $_REQUEST['etype']);
		$jdate = mysqli_real_escape_string($conn, $_REQUEST['ejdate']);
		$sal = mysqli_real_escape_string($conn, $_REQUEST['esal']);
		$phno = mysqli_real_escape_string($conn, $_REQUEST['ephno']);
		$mail = mysqli_real_escape_string($conn, $_REQUEST['e_mail']);
		$add = mysqli_real_escape_string($conn, $_REQUEST['eadd']);

		 
		$sql = "INSERT INTO employee VALUES ($id, '$fname','$lname','$bdate',$age,'$sex','$etype','$jdate','$sal',$phno, '$mail','$add')";
		if(mysqli_query($conn, $sql)){
			echo "<p style='font-size:8;'>Employee successfully added!</p>";
		} else{
			echo "<p style='font-size:8; color:red;'>Error! Check details.</p>";
		}
		
	}
		 
		$conn->close();
	?>
		
			<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
				<div class="column">
					<p>
						<label for="eid">Employee ID:</label><br>
						<input type="number" name="eid">
					</p>
					<p>
						<label for="efname">First Name:</label><br>
						<input type="text" name="efname">
					</p>
					<p>
						<label for="elname">Last Name:</label><br>
						<input type="text" name="elname">
					</p>
					<p>
						<label for="ebdate">Date of Birth:</label><br>
						<input type="date" name="ebdate">
					</p>
					<p>
						<label for="eage">Age:</label><br>
						<input type="number" name="eage">
					</p>
					<p>
						<label for="esex">Sex:</label><br>
						<select id="esex" name="esex">
								<option value="selected">Select</option>
								<option>Female</option>
								<option>Male</option>
								<option>Others</option>
						</select>
					</p>
				</div>
				<div class="column">
					<p>
						<label for="etype">Employee Type:</label><br>
						<select id="etype" name="etype">
							<option value="selected">Select</option>
								<option>Pharmacist</option>
								<option>Manager</option>
						</select>
					</p>
					<p>
						<label for="ejdate">Date of Joining:</label><br>
						<input type="date" name="ejdate">
					</p>
					<p>
						<label for="esal">Salary:</label><br>
						<input type="number" step="0.01" name="esal">
					</p>
					<p>
						<label for="ephno">Phone Number:</label><br>
						<input type="number" name="ephno">
					</p>
					
					<p>
						<label for="e_mail">Email ID:</label><br>
						<input type="text" name="e_mail">
					</p>
					<p>
						<label for="eadd">Address:</label><br>
						<input type="text" name="eadd">
					</p>
					
				</div>
				
			
			<input type="submit" name="add" value="Add Employee">
			</form>
		<br>
	</div>
	
</body>

        
    </div>

    

</body>

</html>
