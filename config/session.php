<?php
session_start();
if(!isset($_SESSION['agent_forum']) || ($_SESSION['agent_forum']!=md5($_SERVER['HTTP_USER_AGENT'])) ){
header("location: login?page=login");
exit();

}
?>