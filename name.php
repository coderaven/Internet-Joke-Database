<?php include "header.php" ?>

<p>
	<?php 
		$name = $_GET['name'];
		echo 'Welcome to our website, ' . $name . '!';
	 ?>	
</p>

<?php include "footer.php" ?>