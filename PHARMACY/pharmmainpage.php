<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="table1.css">
<link rel="stylesheet" type="text/css" href="nav2.css">
<title>
Pharmacist Dashboard
</title>
</head>
<style>
body {font-family:Arial;}

.image-container {
        position: relative;
        display: inline-block;
        margin-top: 150px;
        margin-left: 20px;
        transition: transform 0.3s ease;
    }

    .image-container:hover {
        transform: scale(1.05); /* Slight zoom-in effect on hover */
    }

    .image-container img {
        width: 280px;
        height: 275px;
        border-radius: 50%; /* Make the images circular */
        border: 4px solid #333; /* Add border */
        padding: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Add a subtle shadow */
    }

    /* Tooltip styling */
    .tooltip-text {
        visibility: hidden;
        width: 150px;
        background-color: #333;
        color: #fff;
        text-align: center;
        border-radius: 8px;
        padding: 8px;
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        opacity: 0;
        transition: opacity 0.3s;
        font-size: 14px;
        margin-top: 10px; /* Space between image and tooltip */
    }

    /* Show tooltip on hover */
    .image-container:hover .tooltip-text {
        visibility: visible;
        opacity: 1;
    }
</style>

<body>

	<div class="sidenav">
			<h2 style="font-family:Arial; color:white; text-align:center;"> MediCure Pharmacy
				 </h2>
			<a href="pharmmainpage.php">Dashboard</a>
			
			<a href="pharm-inventory.php">View Inventory</a>
			<a href="pharm-pos1.php">Add New Sale</a>
			<button class="dropdown-btn">Customers
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="pharm-customer.php">Add New Customer</a>
				<a href="pharm-customer-view.php">View Customers</a>
			</div>
	</div>
	
	<?php
	
	include "config.php";
	session_start();
	
	$sql="SELECT E_FNAME from EMPLOYEE WHERE E_ID='$_SESSION[user]'";
	$result=$conn->query($sql);
	$row=$result->fetch_row();
	
	$ename=$row[0];
		
	?>

	<div class="topnav">
		<a href="logout1.php">Logout(signed in as <?php echo $ename; ?>)</a>
	</div>
	
	<center>
	<div class="head">
	<h2> PHARMACIST DASHBOARD </h2>
	</div>
	</center>
	
	<div class="image-container" style="padding-left: 480px;">
    <a href="pos1.php">
       <img src="2.png" alt="Add New Sale" >

        <div class="tooltip-text">Add New Sale</div>
    </a>
</div>

<div class="image-container">
    <a href="inventory-view.php">
        <img src="4.png" alt="View Inventory">
        <div class="tooltip-text">View Inventory</div>
    </a>
</div>
	
</body>

<script>

	var dropdown = document.getElementsByClassName("dropdown-btn");
	var i;

		for (i = 0; i < dropdown.length; i++) {
		  dropdown[i].addEventListener("click", function() {
		  this.classList.toggle("active");
		  var dropdownContent = this.nextElementSibling;
		  if (dropdownContent.style.display === "block") {
		  dropdownContent.style.display = "none";
		  } 
		  else {
		  dropdownContent.style.display = "block";
		  }
		});
	}
	
</script>

</html>