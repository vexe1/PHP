<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=netology;charset=utf8', 'root');
function logout()
{
    session_destroy();
}

