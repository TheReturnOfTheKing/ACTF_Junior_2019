<?php
error_reporting(0);
/*
 * @Author: Lhaihai
 * @Blog: https://www.lhaihai.wang/
 * @Date: 2019-01-14 16:01:50
 * @Description: 
 */
$hello = $_GET['hello'];
$world = $_POST['world'];

if($hello == '一入安全深似海' && $world == '从此头发日渐少'){
    header('Location: 80791b3ae7002cb88c246876d9faa8f8.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GET POST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <p>GET请求</p>
    <p>hello参数的值:   一入安全深似海</p>
    <p>POST请求</p>
    <p>world参数的值:   从此头发日渐少</p>
</body>
</html>