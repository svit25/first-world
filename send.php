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



<?php
$to = "svit.ura@gmail.com"; // емайл получателя данных из формы
$tema = "КУДАХ- ТАХ- ТАХ"; // тема полученного емайла
$message = "Ваше имя: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
  $message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
$message .= "Сообщение: ".$_POST['message']."<br>"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>