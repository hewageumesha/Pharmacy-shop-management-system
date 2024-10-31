<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="nav2.css">
    <title>Admin Dashboard
    
    </title>
    <link rel="icon" type="image/x-icon" href="icon.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery library -->
    <style>
        /* Additional CSS for icon and navigation styles */
        body {
            font-family: Arial, sans-serif; /* Default font for the page */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
            overflow-y: auto; /* Enables vertical scrolling if content overflows */
            height: 100vh; /* Sets body height to match the viewport */
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

        .topnav h2 {
            color: white; /* Header text color */
            text-align: left; /* Center align the header */
        }

        .topnav h3 {
            color: white; /* Header text color */
            text-align: right; /* Center align the header */
        }

        .sidenav a, .dropdown-btn {
            text-decoration: none; /* Remove underline */
            display: block; /* Make links block elements */
            color: white; /* Text color */
            padding: 10px; /* Padding for clickable area */
            margin: 10px; /* Margin for spacing */
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.5s ease; /* Transition for hover effect */
        }
        
        .sidenav a:hover, .dropdown-btn:hover {
            background-color: #7E60BF; /* Background on hover */
            color: white; /* Text color on hover */
        }

        img {
            transition: transform 0.3s ease; /* Transition for scaling effect */
        }

        img:hover {
            transform: scale(1.1); /* Scale up the icon on hover */
        }

        .topnav {
            background-color: #3D2B3A; /* Top navigation background */
            color: white; /* Text color */
            padding: 10px; /* Padding for top navigation */
            position: fixed; /* Keep the top navigation fixed */
            width: 100%; /* Full width */
            z-index: 1; /* Keep on top */
            
            float: right; /* Float to the right */
            padding-right: 80px; /* Right padding */
        }

        /* Margin for content below the top nav */
        .content {
            margin-top: 60px; /* Adjust according to the height of the top nav */
            padding-left: 260px; /* Space for the sidenav */
        }

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
        width: 180px;
        height: 175px;
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

            // Fade in effect for images on page load
            $("img").hide().fadeIn(1000);
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
    
    <h3><a href="logout.php">Logout (Logged in as Admin)</a><h3>
    <h2>MediCure Pharmacy</h2>
    </div>
    
    <div class="content">
        <center>
            <div class="head">
                <h2> ADMIN DASHBOARD </h2>
            </div>
        </center>
        
        <div class="image-container" style="padding-left: 80px;">
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

<div class="image-container">
    <a href="employee-view.php">
        <img src="3.png" alt="Employees List">
        <div class="tooltip-text">View Employees</div>
    </a>
</div>

<div class="image-container">
    <a href="salesreport.php">
        <img src="5.png" alt="Transactions List">
        <div class="tooltip-text">View Transactions</div>
    </a>
</div>

<div class="image-container">
    <a href="stockreport.php">
        <img src="1.png" alt="Low Stock Report">
        <div class="tooltip-text">Low Stock Alert</div>
    </a>
</div>
    </div>

</body>
</html>
