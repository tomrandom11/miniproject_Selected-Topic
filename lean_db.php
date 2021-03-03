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
echo '
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
';

    require_once("db_item.php");
    $sql = "UPDATE item_z SET
    item_name = '{$_POST['item_name']}',
    item_status = '{$_POST['item_status']}',
    number = '{$_POST['number']}',
    time_day = '{$_POST['time_day']}'
    WHERE item_id = '{$_POST['item_id']}' ";
            
    if ($conn->query($sql) === TRUE) {
      echo '
			<script>
				setTimeout(function() {
				swal({
						title: "บันทึกการยืม !!",
						text: "เรียบร้อย",
					}, function() {
					window.location = "search.php";
				});
				}, 1000);
			</script>
			';
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>
 </body>
</html>

