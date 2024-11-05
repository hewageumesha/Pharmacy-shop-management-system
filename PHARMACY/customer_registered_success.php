<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="login1.css">
<div class="header">
<h1>PHARMACIA</h1>
<p style="margin-top:-20px;line-height:1;font-size:30px;">Pharmacy Management System</p>
</div>
<title>
Pharmacia 
</title>
</head>


<body>

<div class="container" style="max-width: 600px; margin: 80px auto; padding: 20px; background-color: #ffffff; box-shadow: 0px 0px 10px rgba(0,0,0,0.1);">
        <h2 style="text-align: center; color: #7F00FF; font-size: 28px; margin-bottom: 20px;background-color:#7F00FF;color: white; font-size: 25px;">Register Pharmacist</h2>
        <form action="customer_registered_success.php" method="POST">
            <div class="form-group" style="margin-bottom: 15px;">
                <label for="fullname" style="font-weight: bold; color: #2f4f4f;">Full Name:</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="username" style="font-weight: bold; color: #2f4f4f;">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="email" style="font-weight: bold; color: #2f4f4f;">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="contact" style="font-weight: bold; color: #2f4f4f;">Contact:</label>
                <input type="text" class="form-control" id="contact" name="contact" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <label for="address" style="font-weight: bold; color: #2f4f4f;">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div class="form-group" style="margin-bottom: 20px;">
                <label for="password" style="font-weight: bold; color: #2f4f4f;">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 10px; background-color:#7F00FF; color: white; font-size: 18px; border: none; border-radius: 4px;">Register</button>
        </form>
    </div>

    </div>

    <!-- PHP Code to Process Form Data -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Database connection
        $conn = new mysqli("localhost", "root", "", "pharmacy");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Sanitize and fetch form data
        $fullname = $conn->real_escape_string($_POST['fullname']);
        $username = $conn->real_escape_string($_POST['username']);
        $email = $conn->real_escape_string($_POST['email']);
        $contact = $conn->real_escape_string($_POST['contact']);
        $address = $conn->real_escape_string($_POST['address']);
        $password = $conn->real_escape_string($_POST['password']);

        // Insert data into database
        $query = "INSERT INTO pharmacist (fullname, username, email, contact, address, password) VALUES ('$fullname', '$username', '$email', '$contact', '$address', '$password')";
        $success = $conn->query($query);

        if (!$success) {
            die("Could not enter data: " . $conn->error);
        }

        $conn->close();
    ?>
        <!-- Success Message -->
        <div class="container">
            <div class="jumbotron" style="text-align: center;">
                <h2> <?php echo "Welcome, $fullname!" ?> </h2>
                <h1>Your account has been created.</h1>
                <p>Login Now from <a href="mainpage1.php">HERE</a></p>
            </div>
        </div>
    <?php
    }
    ?>

	<div class=footer>
	<br>
	Powered by VE Technologies. 
	<br><br>
	</div>

</body>
</html>