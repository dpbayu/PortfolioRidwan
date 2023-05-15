<?php
require '../function.php';
$id = $_GET['id'];
$sql = "DELETE FROM tbl_resume WHERE id = '$id'";
if (mysqli_query($db, $sql)) {
    header("Location: resume.php?success=Data success deleted");
    exit();
} else {
    header("Location: resume.php?failed=Data failed delete");
    exit();    
}
?>