<?php
 include("db_connect.php");
 session_start();
 header('Content-Type: text/html; charset = utf-8');
 $name = $_POST['name'];
 mysql_query("UPDATE `member` SET name='{$_POST['name']}',birth='{$_POST['birth']}',phone='{$_POST['phone']}',email='{$_POST['email']}' WHERE account = '{$_GET['account']}'");
 $_SESSION['membername'] = $_POST['name'];
 header("Location: login.php");
 ?>