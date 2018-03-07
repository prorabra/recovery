<?php
  error_reporting(0);
  $from = "Замовлення";
  $mail = 'Recoverydental@gmail.com';
  $message = '<h2>Замовлення зворотного дзвінка</h2><hr>
    <p><strong>Ім\'я:</strong> '.$_POST['name'].'</p>
    <p><strong>Телефон:</strong> '.$_POST['phone'].'</p>
    <p><strong>Коментар:</strong> '.$_POST['commit'].'</p>';
  $subject='Замовлення зворотного дзвінка';
  mail($mail, $subject, $message, "From: $from\nContent-type: text/html; charset=utf-8 \r\n");


  // // echo $result;
  header("Location: /");

