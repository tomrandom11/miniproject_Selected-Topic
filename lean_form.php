<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        header('location: login_1.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login_1.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="st.css">
</head>
<body>
<?php 
    require_once("db_item.php");//เรียกใช้กconn
    $sql = "SELECT * FROM item_z WHERE item_id ='{$_GET['id']}'"; //สร้างเก้บ
    $result = $conn->query($sql);//ดึงข้อมูล
    if ($result->num_rows > 0) {//มีข้อมูลรึเปล่า
       $row = $result->fetch_assoc();//เอาแค่ข้อมูล
    }
 ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" 
integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" 
integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" 
crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="index1.php">ระบบคลังอุปกรณ์ทำสวน</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="search.php">รายระเอียดอุปกรณ์</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="item.php">อุปกรณ์ในระบบ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add.php">เพื่มอุปกรณ์</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="delete.php">ลบอุปกรณ์</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ประวัติการเข้าออกอุปกรณ์</a>
        </li>
        <li class="nav-item">
        <?php if (isset($_SESSION['username'])) : ?>
            <a class="nav-link" href="index1.php?logout='1'" >Logout</a>
        <?php endif ?>
        </li>
      </ul>
      <span class="navbar-text">
      username:<?php echo $_SESSION['username']; ?>
      </span>
    </div>
  </div>
</nav>
<br>
<div align="center">
<article>
          <br>
         <h1 style="text-align:center;font-size:160%;">ยืมอุปกรณ์</h1>
             <h2 style="text-align:center;font-size:160%;"></h2>
                <div class="m" style="text-align:center;">
                <form action="lean_db.php" method="post">
    <label for="item_id">รหัสอุปกร : </label>
    <?php echo $row['item_id']; ?>
    <input type="hidden" name="item_id" id="item_id" value="<?php echo $row['item_id'] ?>">
 
    <br><br>
    <label for="item_name">ชื่ออุปกร : </label>
    <?php echo $row['item_name']; ?>
    <input type="hidden" name="item_name" id="item_name" value="<?php echo $row['item_name'] ?>">
    <br><br>
    <label for="item_status">สถานะ(ชื่อผู้ยืม) : </label>
    <input type="text" name="item_status" id="item_status" value="<?php echo $row['item_status'] ?>">
    <br><br>
    <label for="number">เบอร์ : </label>
    <input type="text" name="number" id="number" value="<?php echo $row['number'] ?>">
    <br><br>
    <label for="time_day">วันที่จะคืน : </label>
    <input type="date" name="time_day" id="time_day" value="<?php echo $row['time_day'] ?>">
   

 
    <!-- ปุ่ม -->
    <br><br>
    <button type="submit"class="btn btn-success">ยืนยัน : </button>
    <button type="reset"class="btn btn-success">ล้างข้อมูล</button>
</form>




                </div>
        </article>
</div>
</body>
</html>