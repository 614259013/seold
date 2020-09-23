<html>
<head>
<link rel="stylesheet" href="../css/product.css">
</head>
<body>

<?php 
require ('bootstap.php');
require ("../php/connect.php");
    
  $sql = "SELECT * FROM studentold";     
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  
?>
<br>
<br>
<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
<a href="userindex.php?S_id=<?php echo $_GET['S_id'] ?>">back</a>
<div class="container">
<div class="row">
<?php
while($result = $stmt->fetch( PDO::FETCH_ASSOC ))  {
?>

<div class="col-3">
  <div class="layout-card">
  <div class="card-overzone">
    <center>
    <img src="../image/student/<?php  echo $result['S_img'] ?>" >
    <div class="card-body-overzone">
      <h5 class="card-title"><?php echo$result['S_namna'];echo '_';echo $result['S_name'];echo '_';echo $result['S_lastname'] ?></h5>
      <h5 class="card-title"><?php echo$result['S_id'];echo '_';echo $result['S_moo'] ?></h5>
      <h5 class="card-title"><?php echo$result['S_phone']?></h5>
      <h5 class="card-title"><?php echo$result['S_rank'];echo '_';echo $result['W_name'] ?></h5>
    </div>
    </center>
  </div>
</div>
<br>
<br>
</div>

<?php
}
?>

</div>
</div>
<br>
<br>
<br>
</body>