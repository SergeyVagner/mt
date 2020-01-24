<?php
/* 
   Этот скрипт дергает Mikrotik когда срабатывает триггер
*/


//if ( $_GET['k'] != 'hBzfo8xsiIgQQnDA6HEsOyOAE4G' ) die();


// послать сообщение от имени бота в нашу группу "JC_waits"  ("id":-170502666):
$sendToTelegram = file_get_contents('https://api.telegram.org/bot1082546441:AAFnAzobPVKJFwPSFnGCD1G-7Vh7QZ1vLKU/sendMessage?chat_id=289475454&text=TESTTTTTTTTTTTT);

echo " ";

?>
