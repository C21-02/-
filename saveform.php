<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
   {$name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $file = fopen("userdata.txt", "a");
    fwrite($file, "��'�: " . $name . "\n");
    fwrite($file, "�������: " . $surname . "\n");
    fwrite($file, "Email: " . $email . "\n");
    fwrite($file, "������: " . $password . "\n");
    fwrite($file, "\n");
    fclose($file);
    echo "��� ������ ���������.";} 
    else {echo "�������: ������� ����� ������.";}
?>
