<?php
require 'connect.php';
$profileImageName= time(). '_' .$_FILES['imageStudent']['name'];
$newpassword=md5($_POST['passtb']);
$target='../image/student/'.$profileImageName;

if(move_uploaded_file($_FILES['imageStudent']['tmp_name'], $target)){

    

    $sql = "insert into studentold (S_id,S_namna,S_name,S_lastname,S_pass,S_brithday,S_moo
    ,S_pee,S_img,S_phone,S_ability)
    values (:studentidtb,:namnatb,:snametb,:lastnametb,:password,:datetb,:sectiontb
    ,:yeartb,:img,:phonetb,:skilltb)";

	
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':studentidtb',$_POST['studentidtb']);
    $stmt->bindParam(':namnatb',$_POST['namnatb']);
    $stmt->bindParam(':snametb',$_POST['snametb']);
    $stmt->bindParam(':lastnametb',$_POST['lastnametb']);
    $stmt->bindParam(':password',$newpassword);
    $stmt->bindParam(':datetb',$_POST['datetb']);
    $stmt->bindParam(':sectiontb',$_POST['sectiontb']);
    $stmt->bindParam(':yeartb',$_POST['yeartb']);
    $stmt->bindParam(':phonetb',$_POST['phonetb']);
    $stmt->bindParam(':skilltb',$_POST['skilltb']);
    $stmt->bindParam(':img',$profileImageName);
     
    $stmt->execute();

   header('location:../view/formSignupneck.php');
 
} 
?>