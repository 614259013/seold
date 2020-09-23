<?php
require 'connect.php';
$id=$_GET['S_id'];

$sql="UPDATE studentold SET S_rank = :ranktb , W_name = :cnametb , W_phone = :phonetb  WHERE S_id =$id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':ranktb',$_POST['ranktb']);
$stmt->bindParam(':cnametb',$_POST['cnametb']);
$stmt->bindParam(':phonetb',$_POST['phonetb']);
$stmt->execute();

header('location:../view/formLogin.php');
?>