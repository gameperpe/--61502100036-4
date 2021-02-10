<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โชว์รายชื่อภาพยนต์</title>
    <!-- ส่วนเรียกใช้ bootstarp -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<?php 
  include('connect.php');//เรียกใช้กconn
  $sql = "SELECT * FROM movie"; //สร้างเก้บ
  $result = $con->query($sql);//ดึงข้อมูล

  if(isset ($_GET['serach_click'])){
    $sql = "SELECT * FROM movie WHERE id LIKE '%{$_GET['search']}%' OR fname LIKE '%{$_GET['search']}%' ";// LIKE การหาทุกตัว
  
    
  }
  $result = $con->query($sql);//ดึงข้อมูล

 ?>
<body>
  <br>
<form action="login.php" method="get"  style="width: 20rem; margin-left: 2%;" >
 
    <div class="mb-3">
    <input type="hiden" class="form-control" name="search"   id="search" placeholder="ค้นหา">
    
    </div>
    <button type="submit" class="btn btn-primary" name="serach_click">ค้นหา</button>
</form>

<br>
<a href="show_form.php" style=" margin-left: 2%;" ><button type="submit" class="btn btn-primary" >กลับหน้าหลัก</button></a>
<br>
<br>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                  
                    <th scope="col">ชื่อภาพยนต์</th>
                    <th scope="col">เวลาที่เริ่มฉาย</th>
                
                    <th scope="col">แก้ไขรายการ</th>
                  </tr>
                </thead>
                <tbody>
<?php
        while($row = mysqli_fetch_array($result)) { 
          
?>
                  <tr>
                    <td><?php echo $row["nmovie"];?></td>
                    <td><?php echo $row["date"];?></td>
                  
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                          <a href="update_form.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-warning">แก้ไข</button></a>
                          <a href="delete.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-danger">ลบ</button></a>
                        </div>
                    </td>
                  </tr>
<?php 
        }
?>
                </tbody>
              </table>
              <a href="insert_form.html"><button type="button" class="btn btn-primary">เพิ่มรายการภาพยนต์</button></a>
              <div class="btn-group" role="group" aria-label="Basic mixed styles example">
    <form action="login.php" method="post">
     <button type="submit" name="logout" class="btn btn-success">ออกจากระบบ</button>
    </form>
    </div>
        </div>
      </div>
    
</body>
</html>