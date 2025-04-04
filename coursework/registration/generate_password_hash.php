<?php
// generate_admin.php
$password = 'Rollins_1986';
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
echo "Хэш для админа: ".$hashedPassword;
?>