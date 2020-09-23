<?php
require 'connect.php';
$newpassword = md5($_POST['passtb']);

$sql = "SELECT * FROM studentold WHERE S_id =:stdid and S_pass = :pass";

	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':stdid',$_POST['sidtb']);
    $stmt->bindParam(':pass', $newpassword);
    if($stmt->execute()){
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    header('location:../view/userindex.php?S_id='.$result['S_id'].' ');    
    }else{
         echo "<script>window.history.back()</script>";
    }
  $conn = null;

?>