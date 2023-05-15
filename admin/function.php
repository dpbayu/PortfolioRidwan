<?php
require '../function.php';

// Update Home Start
if (isset($_POST['editHome'])) {
    $home_title = mysqli_real_escape_string($db,$_POST['home_title']);
    $home_name = mysqli_real_escape_string($db,$_POST['home_name']);
    $home_img = $_FILES['home_img']['name'];
    $imgtemp = $_FILES['home_img']['tmp_name'];
    if ($imgtemp == '') {
        $sql_home = "SELECT * FROM tbl_home WHERE 1";
        $query_home = mysqli_query($db,$sql_home);
        $fetch_home = mysqli_fetch_array($query_home);
        $home_img = $fetch_home['home_img'];
    }
    move_uploaded_file($imgtemp,"../assets/img/$home_img");
    $resume_img = $_FILES['resume_img']['name'];
    $imgtemp = $_FILES['resume_img']['tmp_name'];
    if ($imgtemp == '') {
        $sql_resume = "SELECT * FROM tbl_home WHERE 1";
        $query_resume = mysqli_query($db,$sql_resume);
        $fetch_resume = mysqli_fetch_array($query_resume);
        $resume_img = $fetch_resume['resume_img'];
    }
    move_uploaded_file($imgtemp,"../assets/img/$resume_img");
    $query = "UPDATE tbl_home SET home_title = '$home_title', home_name = '$home_name', home_img = '$home_img', resume_img = '$resume_img' WHERE id = 1";
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
    $resume_type = trim(mysqli_real_escape_string($db, $_POST['resume_type']));
    $resume_org = trim(mysqli_real_escape_string($db, $_POST['resume_org']));
    $resume_desc = trim(mysqli_real_escape_string($db, $_POST['resume_desc']));
    mysqli_query($db, "INSERT INTO tbl_resume (id, resume_type, resume_org, resume_desc) VALUES ('', '$resume_type', '$resume_org', '$resume_desc')");
        echo "<script>window.location='resume.php?success=Data successfuly added!';</script>";
} else if (isset($_POST['editResume'])) {
    $id = $_POST['id'];
    $resume_org = trim(mysqli_real_escape_string($db, $_POST['resume_org']));
    $resume_desc = trim(mysqli_real_escape_string($db, $_POST['resume_desc']));
    mysqli_query($db, "UPDATE tbl_resume SET resume_org = '$resume_org', resume_desc = '$resume_desc' WHERE id = '$id'");
    echo "<script>window.location='resume.php?success=Data successfuly updated!';</script>";
}
// Add & Edit Resume End

// Update Contact Start
if (isset($_POST['editContact'])) {
    $contact_address = mysqli_real_escape_string($db,$_POST['contact_address']);
    $contact_phone = mysqli_real_escape_string($db,$_POST['contact_phone']);
    $contact_email = mysqli_real_escape_string($db,$_POST['contact_email']);
    $contact_img = $_FILES['contact_img']['name'];
    $imgtemp = $_FILES['contact_img']['tmp_name'];
    if ($imgtemp == '') {
        $sql = "SELECT * FROM tbl_contact WHERE 1";
        $query = mysqli_query($db,$sql);
        $fetch = mysqli_fetch_array($query);
        $contact_img = $fetch['contact_img'];
    }
    move_uploaded_file($imgtemp,"../assets/img/$contact_img");
    $query = "UPDATE tbl_contact SET contact_address = '$contact_address', contact_phone = '$contact_phone', contact_email = '$contact_email', contact_img = '$contact_img' WHERE id = 1";
    $run = mysqli_query($db,$query);
    if ($run) {
        echo "<script>document.location.href = 'contact.php?success=Succesfully updated!';</script>";
    }
}
// Update Contact End

// Update Contact Page Start
if (isset($_POST['update-contact'])) {
    $residence = mysqli_real_escape_string($db,$_POST['residence']);
    $phone = mysqli_real_escape_string($db,$_POST['phone']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $query = "UPDATE tbl_user SET residence = '$residence', phone = '$phone', email = '$email' WHERE id = 1";
    $run = mysqli_query($db,$query);
    if ($run) {
        echo "<script>document.location.href = 'contact.php?success=Succesfully updated!';</script>";
    }
}
// Update Contact Page End

// Update Profile Start
if (isset($_POST['editProfile'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if (empty($username)) {
        echo "Field still empty";
    } else {
            if (empty($password)) {
                $sql = "UPDATE tbl_user SET username = '$username' WHERE id = 1";
                if (mysqli_query($db, $sql)) {
                    echo "<script>document.location.href = 'profile.php?success=Succesfully updated!';</script>";
                } else {
                    echo "Error";
                }
            } else {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql2 = "UPDATE tbl_user SET username = '$username', password = '$hash' WHERE id = 1";
                if (mysqli_query($db, $sql2)) {
                    echo "<script>document.location.href = 'profile.php?success=Password succesfully updated!';</script>";
                } else {
                echo "error";
            }
        }
    }
}
// Update Profile End
?>