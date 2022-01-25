<?php
require 'form.php';
$form=new form($_POST));

var_dump($form->data);
die();
echo $form->input('username');
echo $form->input('password');
echo $form->submit();


?>