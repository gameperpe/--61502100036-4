<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขรายชื่อนักศึกษา</title>
    <!-- ส่วนของการเรียกใช้ bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<body>
<?php
    include("connect.php");
    $sql = "SELECT * FROM movie WHERE id = '{$_GET['id']}'";
    $result = $con->query($sql);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
?>

    <div class="card" style="width: 20rem; margin-left: 38%; margin-top: 5%;">
    <div class="card-body">

    <form action="update.php" method="post">
    <div class="mb-3">
    <label for="staticEmail" class="col-sm-5 col-form-label">แก้ไขรายการ</label>
    <input type="hiden" class="form-control" name="id" id="id"  value="<?php echo $row['id']?>"  readonly >
    </div>

    <div class="mb-3">
    <input type="text"  class="form-control" name="nmovie" id="nmovie" value="<?php echo $row['nmovie']; ?>">
    </div>

    <div class="mb-3">
    <input type="date"  class="form-control" name="date" id="date" value="<?php echo $row['date']; ?>">
    </div>



    <button type="submit" class="btn btn-primary">ยืนยันการแก้ไขรายการ</button>
    </form>

        </div>
      </div>
</body>
</html>

