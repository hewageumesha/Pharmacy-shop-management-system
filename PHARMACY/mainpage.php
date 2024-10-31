<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery library -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script> <!-- jQuery UI for effects -->
    
    <title>Pharmacy Management System</title>
    <link rel="icon" type="image/x-icon" href="icon.png">

    <script>
        $(document).ready(function() {
            // Fade in effect for the container on page load
            $(".container").hide().fadeIn(1000);

            // Add animation on focus for input fields
            $("#div_login .textbox").focus(function() {
                $(this).animate({
                    borderWidth: '2px',
                    padding: '12px'
                }, 200).css('border-color', '#7E60BF');
            }).blur(function() {
                $(this).animate({
                    borderWidth: '1px',
                    padding: '10px'
                }, 200).css('border-color', '#ccc');
            });

            // Button hover effects with color change and scale
            $("input[type=submit]").hover(
                function() {
                    $(this).stop().animate({
                        backgroundColor: "#E4B1F0",
                        transform: "scale(1.05)" // Slightly scale up
                    }, 300);
                },
                function() {
                    $(this).stop().animate({
                        backgroundColor: "#7E60BF",
                        transform: "scale(1)" // Reset scale
                    }, 300);
                }
            );

            // Lift effect on button click
            $("input[type=submit]").mousedown(function() {
                $(this).animate({
                    transform: "translateY(2px)" // Slightly move down
                }, 100);
            }).mouseup(function() {
                $(this).animate({
                    transform: "translateY(0)" // Reset to original position
                }, 100);
            });

            // Shake effect on invalid login
            function shakeEffect() {
                $("#div_login").effect("shake", { times: 3 }, 300);
            }

            // Check for invalid login and trigger shake effect
            <?php if (isset($_POST['submit']) && !$row): ?>
                echo "shakeEffect();";
            <?php endif; ?>
        });
    </script>
</head>
<body>

    <div class="header">
            <h1>Pharmacy Management System</h1>
            <p style="margin-top:-20px;line-height:1;font-size:30px;">Welcome!</p>
    </div>

    <br><br>
    <div class="container">
        <form method="post" action="">
            <div id="div_login">
                <h1>Admin Login</h1>
                <center>
                    <div>
                        <input type="text" class="textbox" id="uname" name="uname" placeholder="Username" required />
                    </div>
                    <div>
                        <input type="password" class="textbox" id="pwd" name="pwd" placeholder="Password" required />
                    </div>
                    <div>
                        <input type="submit" value="Submit" name="submit" id="submit" />
                        <input type="submit" value="Click here for Pharmacist Login" name="psubmit" id="psubmit" />
                    </div>
                </center>

                <?php
                include "config.php";

                if(isset($_POST['submit'])){
                    $uname = mysqli_real_escape_string($conn,$_POST['uname']);
                    $password = mysqli_real_escape_string($conn,$_POST['pwd']);

                    if ($uname != "" && $password != ""){
                        $sql="SELECT * FROM admin WHERE a_username='$uname' AND a_password='$password'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_row();
                        if(!$row) {
                            echo "<p style='color:red;'>Invalid username or password!</p>";
                        } else {
                            session_start();
                            $_SESSION['user']=$uname;
                            header('location:adminmainpage.php');
                        }
                    }
                }
                    
                if(isset($_POST['psubmit'])) {
                    header("location:mainpage1.php");
                }
                ?>
            </div>
        </form>
    </div>

    <!-- Footer Section -->
    <footer class="footer">
        <p>&copy; 2024 Pharmacy Management System. All rights reserved.</p>
        <p>
            <a href="aboutus.html" class="footer-link">About Us</a> |
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
