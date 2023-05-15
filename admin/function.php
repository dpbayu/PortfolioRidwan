<?php
require '../function.php';

// Update Home Start
if (isset($_POST['editHome'])) {
    $home_title = mysqli_real_escape_string($db,$_POST['home_title']);
    $home_name = mysqli_real_escape_string($db,$_POST['home_name']);
    $home_img = $_FILES['home_img']['name'];
    $imgtemp = $_FILES['home_img']['tmp_name'];
    if ($imgtemp == '') {
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

// Update About Start
if (isset($_POST['editAbout'])) {
    $about_title = mysqli_real_escape_string($db,$_POST['about_title']);
    $about_desc = mysqli_real_escape_string($db,$_POST['about_desc']);
    $about_img1 = $_FILES['about_img1']['name'];
    $imgtemp1 = $_FILES['about_img1']['tmp_name'];
    if ($imgtemp1 == '') {
        $sql_img1 = "SELECT * FROM tbl_about WHERE 1";
        $query_sql = mysqli_query($db,$sql_img1);
        $fetch_img1 = mysqli_fetch_array($query_sql);
        $about_img1 = $fetch_img1['about_img1'];
    }
    move_uploaded_file($imgtemp1,"../assets/img/$about_img1");
    $about_img2 = $_FILES['about_img2']['name'];
    $imgtemp2 = $_FILES['about_img2']['tmp_name'];
    if ($imgtemp2 == '') {
        $sql_img2 = "SELECT * FROM tbl_about WHERE 1";
        $query_sq2 = mysqli_query($db,$sql_img2);
        $fetch_img2 = mysqli_fetch_array($query_sq2);
        $about_img2 = $fetch_img2['about_img2'];
    }
    move_uploaded_file($imgtemp2,"../assets/img/$about_img2");
    $query = "UPDATE tbl_about SET about_title = '$about_title', about_desc = '$about_desc', about_img1 = '$about_img1', about_img2 = '$about_img2' WHERE id = 1";
    $run = mysqli_query($db,$query);
    if ($run) {
        echo "<script>document.location.href = 'about.php?success=Succesfully updated!';</script>";
    }
}
// Update About End

// Add & Edit Resume Start
if (isset($_POST['addResume'])) {
    $type_resume = trim(mysqli_real_escape_string($db, $_POST['type_resume']));
    $org_resume = trim(mysqli_real_escape_string($db, $_POST['org_resume']));
    $desc_resume = trim(mysqli_real_escape_string($db, $_POST['desc_resume']));
    mysqli_query($db, "INSERT INTO tbl_resume (id, type_resume, org_resume, desc_resume) VALUES ('', '$type_resume', '$org_resume', '$desc_resume')");
        echo "<script>window.location='resume.php?success=Data successfuly added!';</script>";
} else if (isset($_POST['editResume'])) {
    $id = $_POST['id'];
    $org_resume = trim(mysqli_real_escape_string($db, $_POST['org_resume']));
    $desc_resume = trim(mysqli_real_escape_string($db, $_POST['desc_resume']));
    mysqli_query($db, "UPDATE tbl_resume SET org_resume = '$org_resume', desc_resume = '$desc_resume' WHERE id = '$id'");
    echo "<script>window.location='resume.php?success=Data successfuly updated!';</script>";
}
// Add & Edit Resume End
?>