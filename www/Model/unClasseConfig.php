<?php

// PDO - Biblioteca de acesso a dados do php

$servename = "localhost";
$database = "nutrirede";
$username = "root";
$password = "root";

$pdo = new PDO("mysql:host=$servename;dbname=$database", "$username", "$password");