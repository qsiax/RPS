<?php 
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

		$pass = md5($pass."sadasdfsdg1232455");

		$mysql = new mysqli('localhost', 'host1842492', 'kolya123123', 'host1842492_auth');
		$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
		$users = $result->fetch_assoc();
		if(count($users) == 0) {
			echo "Такой пользователь не найден";
			exit();
		}

		setcookie('users', $users['name'], time() + 3600, "/");

    $mysql->close();

    header('Location: /')
?>