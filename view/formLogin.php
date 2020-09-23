<html>
<head>
<link rel="stylesheet" href="../css/signup.css">
</head>
<body>
<div class="box-form">
    <h2>เข้าสู่ระบบ</h2>
    <form action="../php/Login.php" method="POST" enctype="multipart/form-data">

        <div class="input-sign">
            <p>รหัสนักศึกษา</p>
            <div class="input-name">
                <input type="text" name="sidtb" placeholder="รหัสนักศึกษา">
            </div>
        </div>

        <div class="input-sign">
            <p>PASSWORD</p>      
            <div class="input-lastname">
                <input type="password" name="passtb" placeholder="PASSWORD">
            </div>
        </div>

        <div class="input-sign-button">
            
            <input type="submit" value="เข้าสู่ระบบ">
        </div>

    </form>
    <a href="index.php"><button>กลับ</button></a>
</div>
</body>
</html>