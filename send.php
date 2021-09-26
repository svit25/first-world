<?php
$name = $_POST['name'];
$email = $_POST['email'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);

$name = urldecode($name);
$email = urldecode($email);


$name =trim ($name);
$email = trim ($email);

if (mail("svit_ura@mail.ru",
"На сайте чет написали",
"Имя: ".$name."\n".
"Мыло: ".$email."\r\n")
) {
  echo ('Ушла посылочка!');
}
else {
  echo ('Неа, не ушло');
}
?>
