<!--Announcement-------------------------------------------------------------------------->
<div class="section announcement">

	<div class="announcement">
		<div class='container'>
			<p class="anncment__text">Upcoming adventures</p>
			<span></span>
		</div>
	</div>

	<br>

	<!-- Connection ----------------------------------------------------------------------->
	<?php
			/* Attempt MySQL server connection. Assuming you are running MySQL
			server with default setting (user 'root' with no password) */

			$conn = mysqli_connect("localhost", "user", "password", "hello");
			     
			// Check connection
			if($conn === false){
			    die("ERROR: Could not connect. " . mysqli_connect_error());
			}
	?>
	    		<!-- Select DATA drom DB ------------------------------------------------------------->
	<?php
	        $sql = "SELECT * FROM adventures";
	        $result = mysqli_query($conn, $sql);

                //if there exist rows in the DB
	        if (mysqli_num_rows($result) > 0) {
	             // output data of each row dynamically on page
	        while($row = mysqli_fetch_assoc($result)) {
	            echo " <br> <H2 class='place'>" . $row["heading"] . "</h2>" ;	            
                echo "<br> <p class='date__duration'>" . "Date: " . $row["tripDate"] . "</p>";
                echo "<p class='date__duration'>" . "Duration: " . $row["duration"] . " days" . "</p>";       
                echo "<br> <h4>Summary</h4>";
                echo "<p class='containet'>" . $row["summary"] . "</p>";
	           }
                //if no rows in DB print below
	           } else {
	                echo "<h2>0 results</h2>";
	           }
    ?>

		<!-- <div class="content">

			<div class="place">
				<H2 class="place__halifax">Halifax</H2>
			</div>

			<br>

			<div class="date__duration">
				<p>Date: 2023-04-12</p>
				<p>Duration: 4 days</p>
			</div>

			<br>

			<h3>Summary</h3>

			<div class="containet">
				<div class="content__text">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo beatae ducimus cum totam porro expedita cumque itaque molestiae earum, rem tempore enim laboriosam eaque qui deleniti voluptas. Qui nam labore voluptate vero dolores iusto magni, nihil saepe incidunt atque, cupiditate natus quos accusantium voluptatem est aliquid. Earum nulla illum commodi!
					</p>
				</div>
			</div>

			<br>

			<div class="place">
				<H2 class="place__sydney">Sydney</H2>
			</div>
			<br>
			<div class="date__duration">
				<p>Date: 2023-05-10</p>
				<p>Duration: 2 days</p>
			</div>

			<br>

			<h3>Summary</h3>

			<div class="containet">
				<div class="content__text">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo beatae ducimus cum totam porro expedita cumque itaque molestiae earum, rem tempore enim laboriosam eaque qui deleniti voluptas. Qui nam labore voluptate vero dolores iusto magni, nihil saepe incidunt atque, cupiditate natus quos accusantium voluptatem est aliquid. Earum nulla illum commodi!
					</p>
				</div>
			</div>

		</div>
 		-->
</div>