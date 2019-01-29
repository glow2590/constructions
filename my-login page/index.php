<?php
require "header.php";
?>
<main>
	<?php
		if (isset($_SESSION['userId'])) {
		echo '<p class="btn btn-success">you are logged in!</p>';
		}
		else{
			echo '<p class="btn btn-danger">you are logged out</p>';
		}
	?>
	<br/>
	

</main>
<?php
require "footer.php";
?>
