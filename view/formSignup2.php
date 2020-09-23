<html>
<head>
<link rel="stylesheet" href="../css/signup.css">
</head>
<body>
<div class="box-form">
    <h2>ลงทะเบียน</h2>
    <form action="../php/Signup2.php?S_id=<?php echo $_GET['S_id'] ?>" method="POST" enctype="multipart/form-data">

        <div class="input-sign">
            <p>ตำแหน่งงาน</p>
            <div class="input-name">
                <input type="text" name="ranktb" placeholder="ตำแหน่งงาน">
            </div>
        </div>

        <div class="input-sign">
            <p>ชื่อที่ทำงาน</p>      
            <div class="input-lastname">
                <input type="text" name="cnametb" placeholder="ชื่อที่ทำงาน">
            </div>
        </div>

        <div class="input-sign">
            <p>เบอร์โทรศัพท์ที่ทำงาน</p>
            <div class="input-phone">
                <input type="text" name="phonetb" placeholder="10หลัก">
            </div>
        </div>

        <div class="input-sign-button">
            
            <input type="submit" value="ถัดไป">
        </div>

    </form>
    <a href="formSignup.php"><button>กลับ</button></a>
</div>
</body>
</html>