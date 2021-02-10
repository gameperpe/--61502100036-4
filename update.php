<?php
include('connect.php');
$sql = "UPDATE movie SET
nmovie = '{$_POST['nmovie']}',
date = '{$_POST['date']}'


WHERE id = '{$_POST['id']}' ";
 if ($con->query($sql) === TRUE) {
    header("Location: show_form.php");
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>