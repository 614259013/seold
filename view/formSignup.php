<html>
<head>
<link rel="stylesheet" href="../css/signup.css">
</head>
<body>
<div class="box-form">
    <h2>ลงทะเบียน</h2>
    <form action="../php/Signup1.php" method="POST" enctype="multipart/form-data">

        <div class="input-sign">
            <p>ชื่อ</p>
            <div class="input-name">
                <input type="text" name="namnatb" placeholder="นำหน้า">
            </div>
            <div class="input-name">
                <input type="text" name="snametb" placeholder="ชื่อ">
            </div>
            <div class="input-lastname">
                <input type="text" name="lastnametb" placeholder="นามสกุล">
            </div>
        </div>

        <div class="input-sign">
            <p>รหัสนักศึกษา</p>      
            <div class="input-lastname">
                <input type="text" name="studentidtb" placeholder="รหัสนักศึกษา">
            </div>
            <p>password</p>      
            <div class="input-lastname">
                <input type="password" name="passtb" placeholder="password">
            </div>
        </div>

        <div class="input-sign">
            <p>วันเกิด</p>
            <div class="input-date">
                <input type="text" name="datetb" placeholder="01 มกราคม 2542">
            </div>
            <p>หมู่เรียน</p>
            <div class="input-section">
                <input type="text" name="sectiontb" placeholder="61/100">
            </div>
            <p>ปีที่เข้าศึกษา</p>
            <div class="input-year">
                <input type="text" name="yeartb" placeholder="2561">
            </div>
        </div>

        <div class="input-sign">
            <p>รูปถ่าย(300px*300px)</p>
            <div class="input-image">
                <input type="file" id="imageStudent" name="imageStudent" onchange ="displayImage(this)">
            </div>
        </div>

        <div class="input-sign">
            <p>เบอร์โทรศัพท์</p>
            <div class="input-phone">
                <input type="text" name="phonetb" placeholder="10หลัก">
            </div>
            <p>ความสามารถ</p>
            <div class="input-skill">
                <input type="text" name="skilltb" placeholder="เช่น ร้องเพลง">
            </div>
        </div>

        <div class="input-sign-button">
            
            <input type="submit" value="ถัดไป">
        </div>

    </form>
    <a href="index.php"><button>ยกเลิก</button></a>
</div>
</body>
</html>