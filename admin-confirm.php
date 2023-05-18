<!-- Connection ----------------------------------------------------------------------------------->
	<?php 
		include 'header.php';
	?>
	<!--Nav Menue---------------------------------------------------------------------------->
	<?php 
		include 'navmenu.php';
	?>

	<!--Content ------------------------------------------------------------------------------>
	<div class="content_book">
		<h1 class="h1_bookATrip">Admin - Confirm</h1>
		<br>

		<!-- Connection ----------------------------------------------------------------------->
		<?php
			$conn = mysqli_connect("localhost", "user", "password", "hello");
			     
			// Check connection
			if($conn === false){
			    die("ERROR: Could not connect. " . mysqli_connect_error());
			}
	    ?>


		<!-- Confirmation --------------------------------------------------------------------->

		<?php

			$heading = $_POST['heading'];
			$tripDate = $_POST['tripDate'];
			$duration = $_POST['duration'];
			$summary = $_POST['summary'];

			$sql = "INSERT INTO adventures (heading, tripDate, duration, summary) 
        			VALUES ('$heading', '$tripDate', '$duration', '$summary')";

        	if (mysqli_query($conn, $sql)) {
        		
        		echo "<p>The entry added into DB!</p>";
        	} else {     		
        		echo "<p>oooops!!</p>";
        	}

        ?>

        <br>

		<div class="allAdv">
			<a href="index.php" class="viewAllAdv">
				<h2>View all adventures</h2>
			</a>
		</div>
		<br>




	</div>

	

	

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src='JS/script.js'></script> -->
	
</body>
</html>

