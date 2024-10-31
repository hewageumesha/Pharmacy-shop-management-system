<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="nav2.css">
    <link rel="stylesheet" type="text/css" href="table1.css">
    <title>View Sales Reports
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
		

		.container1 {
    margin-top: 50px;
    margin-left: 100px;
    padding: 20px;
    width: 50%;
    border: 3px solid #ccc;
    background-color: #f9f9f9; /* Light background color */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow */
}

.container1 p {
    margin: 15px 0;
}

.container1 label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

.container1 input[type="date"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    font-size: 16px;
    color: #333;
    transition: border 0.3s ease;
}

.container1 input[type="date"]:focus {
    border-color: #66afe9;
    outline: none;
    box-shadow: 0 0 5px rgba(102, 175, 233, 0.5);
}

.container1 input[type="submit"] {
    width: 100%;
    padding: 10px;
    font-size: 18px;
    color: white;
    background-color: #28a745; /* Green color for submit button */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.container1 input[type="submit"]:hover {
    background-color: #219238; /* Darker green on hover */
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
                <h2>View Transaction Reports</h2>
            </div>
		
			
	
	
	<div class="container1">
			<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
					<p>
						<label for="start">Start Date:</label>
						<input type="date" name="start">
					</p>
					<p>
						<label for="end">End Date:</label>
						<input type="date" name="end">
					</p>
				
			<input type="submit" name="submit" value="View Records">
			</form>	
	</div>
	
	<?php
	include "config.php";
		if(isset($_POST['submit'])) {
			
			$start=$_POST['start'];
			$end=$_POST['end'];
			$res=mysqli_query($conn,"SELECT P_AMT('$start','$end') AS PAMT") or die(mysqli_error($conn));
			while($row=mysqli_fetch_array($res))
			{
				$pamt=$row['PAMT'];
				
			}
			
			$res=mysqli_query($conn,"SELECT S_AMT('$start','$end') AS SAMT;") or die(mysqli_error($conn));
			while($row=mysqli_fetch_array($res))
			{
				$samt=$row['SAMT'];
				
			} 
			
			$profit = $samt - $pamt;
			$profits = number_format($profit, 2);
	?>
			
		<table  id="table1" style="margin-right:100px;">
			<tr>
				<th>Purchase ID</th>
				<th>Supplier ID</th>
				<th>Medicine ID</th>
				
				<th>Quantity</th>
				<th>Date of Purchase</th>
				<th>Cost of Purchase(in Rs)</th>
			</tr>
	<?php
	$sql = "SELECT p_id,sup_id,med_id,p_qty,p_cost,pur_date FROM purchase 
			WHERE pur_date >= '$start' AND pur_date <= '$end';";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	
		while($row = $result->fetch_assoc()) {
			
		echo "<tr>";
			echo "<td>" . $row["p_id"]. "</td>";
			echo "<td>" . $row["sup_id"]. "</td>";
			echo "<td>" . $row["med_id"]. "</td>";
			echo "<td>" . $row["p_qty"]. "</td>";
			echo "<td>" . $row["pur_date"]. "</td>";
			echo "<td>" . $row["p_cost"]. "</td>";
			
		echo "</tr>";
		}
	}
	
	echo "<tr>";
	echo "<td colspan=5>Total</td>";
	echo"<td >Rs.".$pamt."</td>";
	echo "</tr>";
	echo "</table>";
	echo "</table>";
	?>	
	
	<table  id="table1" style="margin-right:100px;">
		<tr>
			<th>Sale ID</th>
			<th>Customer ID</th>
			<th>Employee ID</th>
			<th>Date</th>
			<th>Sale Amount(in Rs)</th>
		</tr>
	
	<?php
	include "config.php";
	$sql = "SELECT sale_id, c_id,s_date,s_time,total_amt,e_id FROM sales
			WHERE s_date >= '$start' AND s_date <= '$end';";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	
		while($row = $result->fetch_assoc()) {
			
			
		echo "<tr>";
			echo "<td>" . $row["sale_id"]. "</td>";
			echo "<td>" . $row["c_id"] . "</td>";
			echo "<td>" . $row["e_id"]. "</td>";
			echo "<td>" . $row["s_date"]."</td>";
			echo "<td>" . $row["total_amt"]. "</td>";
			
		echo "</tr>";
		}
	echo "<tr>";
	echo "<td colspan=4>Total</td>";
	echo"<td >Rs.".$samt."</td>";
	echo "</tr>";
	echo "</table>";
	}
	?>
	
	<table id="table1" style="margin-bottom:100px;margin-right:100px;">
	<tr style="background-color: #f2f2f2;" >
		<td>Transaction Amount </td>
				<td>Rs.<?php echo $profits; }?></td>
	</tr>
	</table>
			
        
        
    </div>

    

</body>

</html>
