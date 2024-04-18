<?php
session_start();
$accounts = [
    'chair' => '123',
    'reviewer' => '234',
    'author' => '345'
];
$role = $_POST["role"];
$uId = $_POST["uId"];
$uPwd = $_POST["uPwd"];

if (!isset($accounts[$role])) {
    $_SESSION["check"] = "RoleError";
    include 'include.inc';
    exit();
}
if ($accounts[$role] == $uPwd && $role == $uId) {
    setcookie("userName", $uId, time() + 3600);
    $_SESSION["check"] = "Yes";
    
    switch ($role) {
        case 'chair':
            $_SESSION["role"] = "chair";
            header("Location: chair.php");
            exit();
        case 'reviewer':
            $_SESSION["role"] = "reviewer";
            header("Location: reviewer.php");
            exit();
        case 'author':
            $_SESSION["role"] = "author";
            header("Location: author.php");
            exit();
    }
} else {
    $_SESSION["check"] = "No";
    include 'include.inc';
    exit();
}
?>

