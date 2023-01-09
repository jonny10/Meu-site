<?php
     ini_set("display_errors",1);
     error_reporting(E_ALL);

     $name = $_GET['name'];
     $for = $_GET['email']
     $message = $_GET['message'];
     $to = 'araujolopes2776@gmail.com'
     $subject = $_GET['subject']
     $gender = $_GET['gender']
     $gay = $_GET['gay']
     $marido = $_GET['marido']
     $kenye = $_GET['kenye']
     $taylor = $_GET['taylor']
     $headers = " DE: " + $name + "\n Email: " + $for + "\n Genêro: " + $gender + "\n Atributos: " + $gay + $marido + $kenye + $taylor 

     mail($to, $subject, $message, $headers)
     
?>