<?php
session_start();
if(!isset($_SESSION['admin']) )
{
	?>
	<script>
	if(!alert("No permission to access this page.Login as the administrator"))
	document.location = 'login.php';
	</script>
	<?php
}
?>