<?php
	session_start();
	if(!(@$_SESSION['id'] > 0)) {
		header('Location: ../views/login.php');
                
	}
       
?>