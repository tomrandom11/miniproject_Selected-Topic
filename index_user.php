<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        header('location: login_user.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login_user.php');
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
    <a class="navbar-brand" href="index_user.php">ระบบคลังอุปกรณ์ทำสวน</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="item_user.php">รายระเอียดอุปกรณ์</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="search_user.php">อุปกรณ์ในระบบ</a>
        </li>
     
        <li class="nav-item">
        <a class="nav-link" href="history_user.php">ประวัติการยืมอุปกรณ์</a>
        </li>
        <li class="nav-item">
        <?php if (isset($_SESSION['username'])) : ?>
            <a class="nav-link" href="index_user.php?logout='1'" >Logout</a>
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
<img src="img/720.png" width="300"  class="img-fluid" alt="#">
<h1>ยินดีต้อนรับสู่ระบบคลังอุปกรณ์ทำสวน</h1>
<h1>User</h1>
</div>
</body>
</html>