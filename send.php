<?php

if ( !empty($_POST) && trim($_POST['name']) != '' && trim($_POST['email']) != '' && trim($_POST['message']) != ''  ) {

    $message =  "Вам пришло новое сообщение с сайта. \n" .
                "Имя отправителя: " . $_POST['name'] . "\n" .
                "Email отправителя: ". $_POST['email'] . "\n" .
                "Сообщение: ". $_POST['message'];

    mail( 'info@rosdez.site', "Сообщение с сайта e-service.center", $message );

    header('location: thankyou.html');

}

?>