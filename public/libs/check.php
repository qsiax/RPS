<?php 
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    $role = filter_var(trim($_POST['role']), FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 5 || mb_strlen($login) > 90 ) {
        echo "Недопустимая длина почты";
        exit();
    } else if(mb_strlen($name) < 3 || mb_strlen($login) > 50 ) {
        echo "Недопустимая длина имени";
        exit();
    } else if(mb_strlen($surname) < 3 || mb_strlen($login) > 50 ) {
        echo "Недопустимая длина фамилии";
        exit();
    } else if(mb_strlen($pass) < 8 || mb_strlen($pass) > 16 ) {
        echo "Недопустимая длина пароля (от 8 до 16)";
        exit();
    }

    $pass = md5($pass."sadasdfsdg1232455");

    $mysql = new mysqli('localhost', 'host1842492', 'kolya123123', 'host1842492_auth');
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`, `surname`, `role`) VALUES('$login', '$pass', '$name', '$surname', '$role')");

    $mysql->close();

    header('Location: /')
?>