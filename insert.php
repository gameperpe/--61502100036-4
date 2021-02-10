<?php
include('connect.php');

$query =  "INSERT INTO movie (id, nmovie, date)
VALUES ('{$_POST['id']}', '{$_POST['nmovie']}', '{$_POST['date']}')";
$result = mysqli_query($con, $query); 
if ($result == TRUE) {
    header("Location: show_form.php");
} else {
    echo "ไม่สามารถเพิ่มรายการได้ ";
    
}


?>