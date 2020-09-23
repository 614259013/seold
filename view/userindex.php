<html>
<head>
<link rel="stylesheet" href="../css/index.css">
</head>
<?php
    require '../php/connect.php';
    $stdid=$_GET['S_id'];
    $sql="SELECT * FROM studentold WHERE S_id = $stdid";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<body>
    <!------22252c---->
    <img src="../image/bg.jpg">

    <div class="name-user">
    <h2><?php echo $result['S_name'] ?></h2>
    <a href="index.php"><h2>ออกจากระบบ</h2></a>
    </div>
    
    <div class="botton-neon">
    <a href="profile.php?S_id=<?php echo $result['S_id'] ?>">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        PROFILE
    </a>

    <a href="student.php?S_id=<?php echo $result['S_id'] ?>">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        STUDENT
    </a>
    </div>
</body>
</html>