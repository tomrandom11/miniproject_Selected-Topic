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
<?php 
  require_once("db_item.php");//เรียกใช้กconn
  $sql = "SELECT * FROM item_z"; //สร้างเก้บ
  $sql1 = "SELECT item_name, COUNT(item_name) AS item_count FROM `item_z` GROUP BY item_name";
  $result = $conn->query($sql);//ดึงข้อมูล
  $result1 = $conn->query($sql1);//ดึงข้อมูล
 ?>
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
<article>
          <br>
          <div class="m">
            <form action="history_user.php" method="get">
               <label for="search">ค้นหาอุปกรณ์:</label>
                <input type="text" id="search" name="search"placeholder="กรุณากรอกชื่อของคุณ">
                <button type="submit" class="btn btn-success"name="serach_click">ค้นหาประวัติการยืม</button>
               
            </form>

            <?php 
            
            if(isset ($_GET['delete'])){//ไม่ให้ขึ้น errorตอนกดลบ
              echo $_GET['id'];
              // sql to delete a record
              $sql = "DELETE FROM item_z WHERE item_id = '{$_GET['id']}'";
                if (mysqli_query($conn, $sql)) {
                  echo "  :  ลบข้อมูลสำเสร็จ";
                  } else {
                      echo "Error deleting record: " . mysqli_error($conn);
                  }
            }  
      $sql = "SELECT * FROM item_z"; //สร้างเก้บ
              if(isset ($_GET['serach_click'])){
                $sql = "SELECT * FROM item_z WHERE item_name LIKE '%{$_GET['search']}%' OR item_status LIKE '%{$_GET['search']}%'";// LIKE การหาทุกตัว
              
                echo "<p>คุณกำลังค้นหา: {$_GET['search']}</p>";
              }
         


              $result = $conn->query($sql);//ดึงข้อมูล  $result = $conn->query($sql);//ดึงข้อมูล
              $result1 = $conn->query($sql1);//ดึงข้อมูล
                    
              

              
            ?>
           
            <table style="width:100%"border="1">
            <br>
              <tr align="center">
                <th>รหัสอุปกรณ์</th>
                <th>ชื่ออุปกรณ์</th>
                <th>ชื่อผู้ยืม</th>
                <th>เบอร์</th>
                <th>จำนวนวันเวลายืม</th>
                <th>วันที่ต้องคืน</th>
                <th>จำนวนที่ยืม</th>
        
                
                
              
              </tr> <?php 
              
                     
                          if ($result->num_rows > 0) {//มีข้อมูลรึเปล่า
                                 while($row1 = $result1->fetch_assoc()) {?>
                                   
                                   <?php while($row = $result->fetch_assoc()) {?>
                                    <tr align="center">
                                      <td><?php if($row['item_status']!="ในระบบ"){
                                                        echo $row['item_id'];
                                              }?></td>
                                      <td><?php if($row['item_status']!="ในระบบ"){
                                                        echo $row['item_name'];
                                              }?></td>
                                              
                                              <td><?php if($row['item_status']!="ในระบบ"){
                                                        echo $row['item_status'];
                                              }?></td>
                                               <td><?php if($row['item_status']!="ในระบบ"){
                                                        echo $row['number'];
                                              }?></td>
                                           
                                           <td><?php if($row['item_status']!="ในระบบ"){
                                                        $a = strtotime($row['time_day']);
                                                        $b = strtotime(date("Y-m-d"));
                                                        $days = floor(($a - $b) / 86400);
                                                        if($days < 0){
                                                          
                                                          echo "<font color=\"red\">เลยกำหนด $days วัน</font>";
                                                        }
                                                        else{
                                                        echo $days," วัน";
                                                        }
                                              }?></td>
                                              <td><?php if($row['item_status']!="ในระบบ"){
                                                        echo $row['time_day'];
                                              }?></td>
                                              

                                                         <td><?php if($row['item_status']!="ในระบบ"){
                                                          echo $row['item_count']or $row1['item_count']  ;
                                                         }?> </td>
                                         </tr>
                                        
                      <?php
                                } }
                                
                          } 
                          else {
                                echo "ไม่มีข้อมูล";
                          }
                                  $conn->close(); 
                                    
                      ?>
                      
                </table>
           </table>
           </div>
        </article>
</div>
</body>
</html>