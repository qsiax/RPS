<?php
$name = $_POST['name'];
$message = $_POST['message'];
$email = $_POST['email'];
$token = "5226728797:AAHMPwZuogFvXG6DDsndvkhKUwaZ1jpnUzI";
$chat_id = "-613504786";

if ($email == '') {
  $email = 'Отсутствует';
} else if ($message == '') {
  $message = 'Отсутствует';
} else if ($name == '') {
  $name = 'Отсутствует';
};

$arr = array(
  'Имя пользователя:' => $name,
  'Сообщение:' => $message,
  'Заявка на подборку:' => $email
);




foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: /');
} else {
  echo "Error";
}
?>