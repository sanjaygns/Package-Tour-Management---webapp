<?php
session_start();

 if(!isset($_SESSION['SESS_MEMBER_ID']) || !isset($_SESSION['SESS_FIRST_NAME']) || !isset($_SESSION['SESS_LAST_NAME']) )
{
	?>
	<script>
	if(!alert("No permission to access this page.Login"))
	document.location = 'login.php';
	</script>
	<?php
}
?>