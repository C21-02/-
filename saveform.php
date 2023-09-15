<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
   {$name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $file = fopen("userdata.txt", "a");
    fwrite($file, "Ім'я: " . $name . "\n");
    fwrite($file, "Прізвище: " . $surname . "\n");
    fwrite($file, "Email: " . $email . "\n");
    fwrite($file, "Пароль: " . $password . "\n");
    fwrite($file, "\n");
    fclose($file);
    echo "Дані успішно збережено.";} 
    else {echo "Помилка: невірний метод запиту.";}
?>
