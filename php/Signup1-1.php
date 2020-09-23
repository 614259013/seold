<?php
    require 'connect.php';
    $sql="SELECT * FROM studentold WHERE S_id = :stdid";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':stdid',$_POST['studentidtb']);

    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    header('location:../view/formSignup2.php?S_id='.$result['S_id'].'');
?>