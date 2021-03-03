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
          <a class="nav-link active" aria-current="page" href="item.php">รายระเอียดอุปกรณ์</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="search.php">อุปกรณ์ในระบบ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add.php">เพื่มอุปกรณ์</a>
        </li>
       
        <li class="nav-item">
        <a class="nav-link" href="history.php">ประวัติการเข้าออกอุปกรณ์</a>
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
            <h1 style="text-align:center;font-size:160%;">รายรหัสอุปกรณ์และชื่อทั่งหมดในรายชื่ออุปกรณ์</h1>
            <h2>ประเภทกรรไกร</h2>
            <table class="table">
  <thead align="center" >
    <tr>
      <th scope="col">Image</th>
      <th scope="col">รหัสอุปกรณ์</th>
      <th scope="col">ชื่ออุปกรณ์</th>
    </tr>
  </thead>
  <tbody>
    <tr align="center">
      <th scope="row">
      <img src="https://cdn.homepro.co.th/ART_IMAGE/10/221/1022145/447x447/06012021_1022145$Imagex1.jpg" style="width:200px;height:100px;">
      </th>
      <td>160140XXX</td>
      <td>กรรไกรแต่งกิ่ง 3 จังหวะ</td>
    </tr>
   
    <tr align="center">
      <th scope="row">
      <img src="https://cdn.homepro.co.th/ART_IMAGE/02/074/207490/447x447/14102020_207490$Imagex2.jpg"style="width:200px;height:100px;"></th>
      <td>160141XXX</td>
      <td>กรรไกรตัดหญ้า</td>
    </tr>
    
    <tr align="center">
      <th scope="row">
      <img src="https://cdn.homepro.co.th/ART_IMAGE/02/598/259837/447x447/06012021_259837$Imagex1.jpg"style="width:200px;height:100px;"> </th>
      <td>160142XXX</td>
      <td>กรรไกรแต่งกิ่ง748</td>
    </tr>
   
   
  </tbody>
</table>
            <br>
            <h2>ประเภทเลื่อย</h2><br>
            <table class="table">
            
   <thead align="center" >
    <tr>
      <th scope="col">Image</th>
      <th scope="col">รหัสอุปกรณ์</th>
      <th scope="col">ชื่ออุปกรณ์</th>
    </tr>
  </thead>
  <tbody>
    <tr align="center">
      <th scope="row">
      <img src="https://cdn.homepro.co.th/ART_IMAGE/10/494/1049476/447x447/04032020_1049476$Imagex2.jpg" style="width:200px;height:100px;">
      </th>
      <td>160245XXX</td>
      <td>เลื่อยตัดกิ่งไม้</td>
    </tr>
    <tr align="center">
      <th scope="row">
      <img src="https://cdn.homepro.co.th/ART_IMAGE/01/072/107284/447x447/22012020_107284$Imagex1.jpg"style="width:200px;height:100px;"> </th>
      <td>160246XXX</td>
      <td>เลื่อยคันธนู</td>
    </tr>
    <tr align="center">
      <th scope="row">
      <img src="https://cdn.homepro.co.th/ART_IMAGE/11/156/1115685/447x447/17062020_1115685$Imagex1.jpg"style="width:200px;height:100px;"></th>
      <td>160247XXX</td>
      <td>เลื่อยพับ </td>
    </tr>
    
    
  </tbody>
</table>
<br>
            <h2>ประเภทบัวรดน้ำ</h2><br>
            <table class="table">
            
  <thead align="center">
    <tr>
    <th scope="col">Image</th>
      <th scope="col">รหัสอุปกรณ์</th>
      <th scope="col">ชื่ออุปกรณ์</th>
    </tr>
    </thead>
  <tbody>
    <tr align="center">
      <th scope="row">
      <img src="data:image/jpeg;base64,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" style="width:200px;height:100px;">
      </th>
      <td>160260XXX</td>
      <td>บัวรดน้ำ</td>
    </tr>
  </tbody>
</table>
<br>
            <h2>ประเภทบัวรดน้ำ</h2><br>
            <table class="table">
            
  <thead align="center">
    <tr>
    <th scope="col">Image</th>
      <th scope="col">รหัสอุปกรณ์</th>
      <th scope="col">ชื่ออุปกรณ์</th>
    </tr>
    </thead>
  <tbody>
    <tr align="center">
      <th scope="row">
      <img src="https://cdn.homepro.co.th/ART_IMAGE/10/759/1075935/447x447/24122019_1075935$Imagex1.jpg" style="width:200px;height:100px;">
      </th>
      <td>160345XXX</td>
      <td>ช้อนพรวนดิน CHILLINGTON</td>
    </tr>
    <tr align="center">
      <th scope="row">
      <img src="https://cdn.homepro.co.th/ART_IMAGE/10/970/1097051/447x447/25122019_1097051$Imagex1.jpg" style="width:200px;height:100px;">
      </th>
      <td>160346XXX</td>
      <td>ส้อมพรวนดิน SPRING</td>
    </tr>
  </tbody>
</table>
<br>
            <h2>ประเภทเสียบ</h2><br>
            <table class="table">
            
  <thead align="center">
    <tr>
    <th scope="col">Image</th>
      <th scope="col">รหัสอุปกรณ์</th>
      <th scope="col">ชื่ออุปกรณ์</th>
    </tr>
    </thead>
  <tbody>
    <tr align="center">
      <th scope="row">
      <img src="https://th-test-11.slatic.net/p/fa9988eb890582ed25fcb52d8aa57184.jpg" style="width:200px;height:100px;">
      </th>
      <td>160445XXX</td>
      <td>เสียบด้ามยาว</td>
    </tr>
    <tr align="center">
      <th scope="row">
      <img src="https://www.dohome.co.th/media/catalog/product/cache/2/image/255x255/9df78eab33525d08d6e5fb8d27136e95/1/0/10051972_EA_1200_1.jpg" style="width:200px;height:100px;">
      </th>
      <td>160446XXX</td>
      <td>เสียบด้ามสั้น</td>
    </tr>
  </tbody>
</table>
<br>
            <h2>ประเภทคราด</h2><br>
            <table class="table">
            
  <thead align="center">
    <tr>
    <th scope="col">Image</th>
      <th scope="col">รหัสอุปกรณ์</th>
      <th scope="col">ชื่ออุปกรณ์</th>
    </tr>
    </thead>
  <tbody>
    <tr align="center">
      <th scope="row">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNsMJppj3FLLFboBWDDWtWmWACTEPw0e4HzQ&usqp=CAU" style="width:200px;height:100px;">
      </th>
      <td>160545XXX</td>
      <td>คราดทั่วไป</td>
    </tr>
    <tr align="center">
      <th scope="row">
      <img src="https://dp.lnwfile.com/9aouob.png" style="width:200px;height:100px;">
      </th>
      <td>160546XXX</td>
      <td>คราดใบไม้</td>
    </tr>
  </tbody>
</table>
        </article>
</div>
</body>
</html>