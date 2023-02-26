<?php 
	require_once 'tools.php';
	createHeadAndHeader();
	debugModule();
	if (empty($_SESSION)) {
		header('location: index.php');
	}
?>
</html>