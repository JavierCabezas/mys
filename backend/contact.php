<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 7/19/17
 * Time: 9:28 PM
 */
if(isset($_POST['form'])) {
    $name = $_POST['form']['name'];
    $email = $_POST['form']['email'];
    $subject = $_POST['form']['subject'];
    $number = $_POST['form']['number'];
    $message = $_POST['form']['message'];
    return mail('ventas@mysempresas', 'Contacto desde el sitio web', $message, $from);
}