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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
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
    
    <div class="logout-container">
    <a href="logout.php" class="logout-btn">Logout (Logged in as Admin)</a>
    </div>
    <h2>Pharmacy Management System</h2>
    </div>
    
    <div class="content">
        <center>
            <div class="head">
                <h2> ADMIN DASHBOARD </h2>
            </div>
        </center>
        
        <a href="pos1.php" title="Add New Sale">
            <img src="carticon1.png" style="padding:8px;margin-left:150px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Add New Sale">
        </a>
        
        <a href="inventory-view.php" title="View Inventory">
            <img src="inventory.png" style="padding:8px;margin-left:100px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Inventory">
        </a>
        
        <a href="employee-view.php" title="View Employees">
            <img src="emp.png" style="padding:8px;margin-left:100px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Employees List">
        </a>
        <br>
        <a href="salesreport.php" title="View Transactions">
            <img src="moneyicon.png" style="padding:8px;margin-left:150px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Transactions List">
        </a>
        
        <a href="stockreport.php" title="Low Stock Alert">
            <img src="alert.png" style="padding:8px;margin-left:100px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Low Stock Report">
        </a>
    </div>

    <br>
    <footer class="footer">
        <p>&copy; 2024 Pharmacy Management System. All rights reserved.</p>
        <p>
            <a href="aboutus.html" class="footer-link">about_us.php</a> |
            Contact us: <a href="mailto:support@ruh_pharmacy_ms.com">support@ruh_pharmacy_ms.com</a>
        </p>
        <div class="social-media">
            <a href="https://facebook.com" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="https://linkedin.com" target="_blank" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://instagram.com" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
</body>
</html>
