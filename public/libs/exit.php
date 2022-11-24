<?php 
			setcookie('users', $users['name'], time() - 3600, "/");
			header('Location: index.php')
?>