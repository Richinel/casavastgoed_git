<?php
	include('controllers/dbconnect.php');

	$sql 	= "SELECT * FROM pages WHERE id = '2'";

	$result	= mysqli_query($conn, $sql);
		if ($result->num_rows > 0) {
			while ($row =mysqli_fetch_assoc($result)) {
				$id = $row['id'];
				$title = $row['titel'];

				include('includes/header.php');
?>

	<div class="content">
		<div class="banner" style="background: url('assets/images/home2.jpg'); background-size: cover;">
			<div class="container">
				<div class="wrapper">
					<h2>Huur</h2>
				</div>
			</div>
		</div>
		<div class="wrapper main_content">

			<?php 
					echo $row['content'];
					}
				}
			?>

		</div>
	</div>

<?php include('includes/footer.php'); ?>