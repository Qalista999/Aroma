<?php
session_start();
// $url = $_SERVER['REQUEST_URI'];
// // $url = explode('?', $url);
// // $url = $url[0];

// echo $url;
$url = explode("/", $_SERVER['REQUEST_URI']);
require_once("php/bd.php");
require_once("php/classes/User.php");
// for($i = 0; $i < count($url); $i++) {
// echo $url[$i]."<hr>";
// }
// if ($url[1] == "login") {
// require_once("login.php");
// }
if ($url[1] == "blog") {
$content = file_get_contents("pages/blog.html");
} else if ($url[1] == "contact") {
$content = file_get_contents("pages/contact.html");
} else if ($url[1] == "auth") {
$content = file_get_contents("pages/login.php");
} else if ($url[1] == "register") {
$content = file_get_contents("pages/register.html");
} else if ($url[1] == "articles") {
$content = file_get_contents("pages/single-blog.html");
} else if ($url[1] == "users") {
require_once("pages/users/index.html");
} else if ($url[1] == "addUser") {
echo User::addUser($_POST["name"], $_POST["lastname"], $_POST["email"], $_POST["pass"]);
} else if ($url[1] == "authUser") {
echo User::authUser($_POST[$email], $_POST["pass"]);
} else {
$content = file_get_contents("pages/index.php");
}

if (!empty($content))
require_once("template.php");
