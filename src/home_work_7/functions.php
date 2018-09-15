<?php
session_start();

function login($login, $password)
{
    $user = getUser($login);
    if ($user && $user['password'] == $password) {
        $_SESSION['user'] = $user;
        return true;
    }
        return false;
}

function loginGuest()
{
    if (!empty($_POST['guest'])) {
        $_SESSION['guest'] = $_POST['guest'];
        return true;
    }
        return false;
}


function getUsers ()
{
    $usersData = file_get_contents(__DIR__.'./data/users.json');
    $users = json_decode($usersData, true);
    if (empty($users)) {
        return[];
    }
    return $users;
}

function getUser($login)
{
    $users = getUsers();
    foreach ($users as $user) {
        if ($login === $user ['login']) {
            return $user;
        }
    }
    return null;
}

function isAuthorized ()
{
    return !empty($_SESSION['user']);
}

function getAthorizedUser()
{
    return $_SESSION['user'];
}

function getAthorizedGuest()
{
    return $_SESSION['guest'];
}

function logout()
{
    session_destroy();
}

function getTests()
{
    $testData = file_get_contents($_GET['test']);
    $data = json_decode($testData, true);
    if (empty($data)){
        return[];
    }
    return $data;
}

function getTest()
{

    foreach (getTests() as $value) {
        return $value;
            }
} return null;

function getFile()
{
    $dir = "./";
//        $files = scandir($dir);
        foreach (glob("*.json") as $v=>$filename) {
            $v = $filename;
            return $v;

//            echo '-файл: <a href="test.php?test='.$filename.'">'.$filename.'</a>;<br>';

        }

    return false;
}