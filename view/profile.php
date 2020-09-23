<html>
<head>
<link rel="stylesheet" href="../css/profile.css">
</head>
<body>
<?php 
include '../php/connect.php' ;

$sql = "select * from studentold where S_id = :UserId ";
$stmt = $conn->prepare($sql);
$stmt->bindParam('UserId' , $_GET['S_id']);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

?>
    <div class="group-user">
    <form method="POST" action="ProcessUser.php?U_id=<?php echo $result['U_id'] ?>" enctype="multipart/form-data">
        <div class="input-img">
            <img src="../image/student/<?php echo $result['S_img']?>" id="imageStudent" onClick="triggerClick()" value="">
            <input type="file" name="imageStudent" onchange ="displayImage(this)" id="imageStudent" style="display : none">
        </div>
        <div class="inputBox-user">
                 <input type="text" name="nametb" required value="<?php echo $result['S_name']?>">
                 <label>Fristname</label>
            </div>

            <div class="inputBox-user">
                 <input type="text" name="Lastnametb" required value="<?php echo $result['S_lastname']?>">
                 <label>Lastname</label>
            </div>
            
            <div class="inputBox-user">
                 <input type="text" name="Emailtb" required value="<?php echo $result['S_brithday']?>">
                 <label>Brithday</label>
            </div>

            <div class="inputBox-user">
                 <input type="text" name="Phonetb" required value="<?php echo $result['S_phone']?>">
                 <label>Phone</label>
            </div>

            
     </form>
     <br>
     <br>
     <a href="userindex.php?S_id=<?php echo $_GET['S_id'] ?>"><button >Back</button></a>
    </div>
    <script src="script.js"></script>
</body>
</html>