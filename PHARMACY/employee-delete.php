<?php
	include "config.php";

	// Check if 'id' is set in the GET parameters
	if(isset($_GET['id']) && !empty($_GET['id'])) {
		$employee_id = mysqli_real_escape_string($conn, $_GET['id']); // Prevent SQL Injection

		// Check if the confirmation was received
		if(isset($_GET['confirm']) && $_GET['confirm'] == 'yes') {
			// Begin transaction to delete from both tables
			$conn->begin_transaction();

			try {
				// First, delete the record from the emplogin table (child table)
				$sql1 = "DELETE FROM emplogin WHERE E_ID='$employee_id'";
				if (!$conn->query($sql1)) {
					throw new Exception("Error deleting from emplogin: " . $conn->error);
				}

				// Then, delete the record from the employee table (parent table)
				$sql2 = "DELETE FROM employee WHERE E_ID='$employee_id'";
				if (!$conn->query($sql2)) {
					throw new Exception("Error deleting from employee: " . $conn->error);
				}

				// Commit the transaction if both deletions are successful
				$conn->commit();
				
				// Display a confirmation message
				echo "<script>
					alert('Employee details successfully deleted.');
					window.location.href = 'employee-view.php';
				</script>";
				
			} catch (Exception $e) {
				// Rollback the transaction on error
				$conn->rollback();
				echo $e->getMessage();
			}
		} else {
			// If not confirmed, prompt the user with a confirmation dialog using JavaScript
			echo "<script>
				var confirmDelete = confirm('Are you sure you want to delete the employee details?');
				if(confirmDelete) {
					window.location.href = 'employee-delete.php?id=$employee_id&confirm=yes';
				} else {
					window.location.href = 'employee-view.php';
				}
			</script>";
		}
	} else {
		echo "Invalid or missing employee ID.";
	}
?>
