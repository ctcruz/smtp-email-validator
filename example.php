<?php

require 'vendor/autoload.php';

use Ctcruz\Validator\SMTPEmailValidator;

$validator = new SMTPEmailValidator();
$emails = ['joe@gmail.com'];  
$sender = 'user@example.com';
$result = $validator->validate($emails, $sender);
var_dump($result);  
echo $email.' is '.($result ? 'valid' : 'invalid')."\n";
