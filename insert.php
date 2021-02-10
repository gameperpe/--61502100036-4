<?php
include('connect.php');

$query =  "INSERT INTO movie (id, nmovie, date, fname, pin)
VALUES ('{$_POST['id']}', '{$_POST['nmovie']}', '{$_POST['date']}', '{$_POST['fname']}', '{$_POST['pin']}')";
$result = mysqli_query($con, $query); 
if ($result == TRUE) {
    header("Location: show_form.php");
} else {
    echo "ไม่สามารถเพิ่มรายการได้ ";
    
}


?>