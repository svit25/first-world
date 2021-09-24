<?php
/*$name = $_POST['name'];
$email = $_POST['email'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);

$name = usercode ($name)
$email = usercode ($email)

$name =trim ($name)
$email = trim ($email)

echo $name;
echo "<br>";
echo $email;

mail("svit.ura@gmail.com", "На сайте чет написали", "Имя:".$name.". E-mail: ".$email ,"From: svit_ura@mail.ru \r\n");

if (mail("svit.ura@gmail.com", "На сайте чет написали", "Имя:".$name.". E-mail: ".$email ,"From: svit_ura@mail.ru \r\n"))
{
    echo "Ушла посылочка";
} else {
    echo "Неа, не ушло";
}?>*/




// несколько получателей
$to  = 'svit.ura@gmail.com';


// тема письма
$subject = 'Письмо с моего сайта';

// текст письма
$message = 'Пользователь' . $_POST['name'] . ' отправил вам письмо:<br />' . $_POST['message'] . '<br />
Связяться с ним можно по email <a href="mailto:' . $_POST['email'] . '">' . $_POST['email'] . '</a>'
;

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

// Дополнительные заголовки
$headers .= 'To: Юрий <svit_ura@mail.ru>' . "\r\n"; // Свое имя и email
$headers .= 'From: '  . $_POST['name'] . '<' . $_POST['email'] . '>' . "\r\n";


// Отправляем
mail($to, $subject, $message, $headers);
?>
