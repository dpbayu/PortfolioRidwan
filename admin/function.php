<?php
require '../function.php';

// Update Home Start
if (isset($_POST['editHome'])) {
    $home_title = mysqli_real_escape_string($db,$_POST['home_title']);
    $home_name = mysqli_real_escape_string($db,$_POST['home_name']);
    $home_img = $_FILES['home_img']['name'];
    $imgtemp = $_FILES['home_img']['tmp_name'];
    if ($imgtemp=='') {
        $q = "SELECT * FROM tbl_home WHERE 1";
        $r = mysqli_query($db,$q);
        $d = mysqli_fetch_array($r);
        $home_img = $d['home_img'];
    }
    move_uploaded_file($imgtemp,"../assets/img/$home_img");
    $query = "UPDATE tbl_home SET home_title = '$home_title', home_name = '$home_name', home_img = '$home_img' WHERE id = 1";
    $run = mysqli_query($db,$query);
    if ($run) {
        echo "<script>document.location.href = 'index.php?success=Succesfully updated!';</script>";
    }
}
// Update Home End
?>