<?php
require_once 'functions.php';

if (isset($_POST['execute'])){
    header('Location: addtask.php');
    $stmt = $pdo->prepare ("UPDATE task SET is_done = 1 WHERE id = ?");
    $stmt->bindParam(1, $execute);
    $execute = $_POST['execute'];
    $stmt->execute();
    exit();

}

if (isset($_POST['delete'])) {
    header('Location: addtask.php');
    $stmt = $pdo->prepare ("DELETE FROM task WHERE id = ?");
    $stmt->bindParam(1, $delete);
    $delete = $_POST['delete'];
    $stmt->execute();
    exit();
}

if (isset($_POST['get'])) {
    header('Location: addtask.php');
    $stmt = $pdo->prepare ("UPDATE task SET assigned_user_id = ? WHERE user_id =? AND id = ?");
    $stmt->bindParam(1, $assigned_user_id);
    $stmt->bindParam(2, $user_id);
    $stmt->bindParam(3, $id);
    $assigned_user_id = $_POST['get'];
    $user_id = (int)$_SESSION['user_id'];
    $id = $_POST['id_name'];
    $stmt->execute();
    exit();
}

