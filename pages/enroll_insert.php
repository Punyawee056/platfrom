<?php require_once('includes/authen.php');
    // print_r($_FILES['image_profile']['name']); exit;
  if (isset($_POST['submit'])) {

    $sql_check_code = "SELECT * FROM `user` WHERE `email` = '" . $_POST['email'] . "' ";
    $check_code = $conn->query($sql_check_code);
    if (!$check_code->num_rows) {
        $hashed = password_hash($_POST['phone'], PASSWORD_DEFAULT);

        if($_FILES['image_profile']['name'] != ''){
            $temp =  explode('.',$_FILES['image_profile']['name']);
            $image_profile = round(microtime(true)*9999) . '.' . end($temp);
            $url_user = 'images/user/'.$image_profile;
            if ( move_uploaded_file($_FILES['image_profile']['tmp_name'], $url_user) ){
                copy($url_user, 'images/enroll/profile/'.$image_profile);
            }else{
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal.fire({
                    title: "ผิดพลาด!",
                    text: "ไม่สามารถอัปโหลดรูปภาพใหม่ได้ โปรดลองอีกครั้ง!",
                    type: "warning",
                    icon: "error"
                });';
                echo '}, 500 );</script>';
    
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { 
                    window.location.href = "enroll.php";';
                echo '}, 2000 );</script>';
            }
        } 

        $sql = "INSERT INTO `user` (`email`, `password`, `fname`, `lname`, `phone`, `role`, `image`) 
                    VALUES ('" . $_POST['email'] . "',
                            '" . $hashed . "',
                            '" . $_POST['fname_th'] . "',
                            '" . $_POST['lname_th'] . "',
                            '" . $_POST['phone'] . "',
                            '3',
                            '" .$image_profile . "')";

        $result = $conn->query($sql);
        $last_id = mysqli_insert_id($conn);
            if ($result) {
                if($_FILES['image_transcript']['name'] != ''){
                    $temp =  explode('.',$_FILES['image_transcript']['name']);
                    $image_transcript = round(microtime(true)*9999) . '.' . end($temp);
                        $url_upload = 'images/enroll/transcript/'.$image_transcript;
                    if ( move_uploaded_file($_FILES['image_transcript']['tmp_name'], $url_upload) ){
              
                    }else{
                        echo '<script type="text/javascript">';
                        echo 'setTimeout(function () { swal.fire({
                            title: "ผิดพลาด!",
                            text: "ไม่สามารถอัปโหลดรูปภาพใหม่ได้ โปรดลองอีกครั้ง!",
                            type: "warning",
                            icon: "error"
                        });';
                        echo '}, 500 );</script>';
            
                        echo '<script type="text/javascript">';
                        echo 'setTimeout(function () { 
                            window.location.href = "enroll.php";';
                        echo '}, 2000 );</script>';
                    }
                } 
            
                if($_FILES['image_house_registration']['name'] != ''){
                    $temp =  explode('.',$_FILES['image_house_registration']['name']);
                    $image_house_registration = round(microtime(true)*9999) . '.' . end($temp);
                        $url_house = 'images/enroll/house/'.$image_house_registration;
                    if ( move_uploaded_file($_FILES['image_house_registration']['tmp_name'], $url_house) ){
              
                    }else{
                        echo '<script type="text/javascript">';
                        echo 'setTimeout(function () { swal.fire({
                            title: "ผิดพลาด!",
                            text: "ไม่สามารถอัปโหลดรูปภาพใหม่ได้ โปรดลองอีกครั้ง!",
                            type: "warning",
                            icon: "error"
                        });';
                        echo '}, 500 );</script>';
            
                        echo '<script type="text/javascript">';
                        echo 'setTimeout(function () { 
                            window.location.href = "enroll.php";';
                        echo '}, 2000 );</script>';
                    }
                } 
            
                if($_FILES['image_id_card']['name'] != ''){
                    $temp =  explode('.',$_FILES['image_id_card']['name']);
                    $image_id_card = round(microtime(true)*9999) . '.' . end($temp);
                        $url_id_card = 'images/enroll/id_card/'.$image_id_card;
                    if ( move_uploaded_file($_FILES['image_id_card']['tmp_name'], $url_id_card) ){
              
                    }else{
                        echo '<script type="text/javascript">';
                        echo 'setTimeout(function () { swal.fire({
                            title: "ผิดพลาด!",
                            text: "ไม่สามารถอัปโหลดรูปภาพใหม่ได้ โปรดลองอีกครั้ง!",
                            type: "warning",
                            icon: "error"
                        });';
                        echo '}, 500 );</script>';
            
                        echo '<script type="text/javascript">';
                        echo 'setTimeout(function () { 
                            window.location.href = "enroll.php";';
                        echo '}, 2000 );</script>';
                    }
                } 
            
                // if($_FILES['image_profile']['name'] != ''){
                //     $temp =  explode('.',$_FILES['image_profile']['name']);
                //     $image_profile = round(microtime(true)*9999) . '.' . end($temp);
                //         $url_id_card = 'images/enroll/profile/'.$image_profile;
                //     if ( move_uploaded_file($_FILES['image_profile']['tmp_name'], $url_id_card) ){
              
                //     }else{
                //         echo '<script type="text/javascript">';
                //         echo 'setTimeout(function () { swal.fire({
                //             title: "ผิดพลาด!",
                //             text: "ไม่สามารถอัปโหลดรูปภาพใหม่ได้ โปรดลองอีกครั้ง!",
                //             type: "warning",
                //             icon: "error"
                //         });';
                //         echo '}, 500 );</script>';
            
                //         echo '<script type="text/javascript">';
                //         echo 'setTimeout(function () { 
                //             window.location.href = "enroll.php";';
                //         echo '}, 2000 );</script>';
                //     }
                // } 
            
                $prefix_id = $_POST['prefix_id'];
                $ayear_id = $_POST['ayear_id'];
                $level_id = $_POST['level_id'];
                $major_id = $_POST['major_id'];
            
                $sql = "INSERT INTO `enroll` (`prefix_id`, `ayear_id`, `level_id`, `major_id`, `image_profile`, `image_id_card`, `image_house_registration`, `image_transcript`, `create_by`, `user_id`, `create_date`, `fname_th`, `lname_th`, `fname_en`, `lname_en`, `date_of_birth`, `ethnicity`, `nationality`, `religion`, `blood_type`, `congenital_disease`, `height`, `weight`, `id_card`, `address`, `phone`, `email`, `remark`) 
                        VALUES ('".$prefix_id."',
                                '".$ayear_id."',
                                '".$level_id."',
                                '".$major_id."',
                                '".$image_profile."',
                                '".$image_id_card."',
                                '".$image_house_registration."',
                                '".$image_transcript."',
                                '".$last_id."',
                                '".$last_id."',
                                '".date("Y-m-d H:i:s")."',
                                '".$_POST['fname_th']."',
                                '".$_POST['lname_th']."',
                                '".$_POST['fname_en']."',
                                '".$_POST['lname_en']."',
                                '".$_POST['date_of_birth']."',
                                '".$_POST['ethnicity']."',
                                '".$_POST['nationality']."',
                                '".$_POST['religion']."',
                                '".$_POST['blood_type']."',
                                '".$_POST['congenital_disease']."',
                                '".$_POST['height']."',
                                '".$_POST['weight']."',
                                '".$_POST['id_card']."',
                                '".$_POST['address']."',
                                '".$_POST['phone']."',
                                '".$_POST['email']."',
                                '".$_POST['remark']."')";
                    
                    $result = $conn->query($sql);
                    if ($result) {
                        echo '<script type="text/javascript">';
                        echo 'setTimeout(function () { swal.fire({
                            title: "บันทึกสำเร็จ!",
                            type: "success",
                            icon: "success"
                        });';
                        echo '}, 500 );</script>';
            
                        echo '<script type="text/javascript">';
                        echo 'setTimeout(function () { 
                            window.location.href = "index.php";';
                        echo '}, 2000 );</script>';
                    } else {
                        echo '<script type="text/javascript">';
                        echo 'setTimeout(function () { swal.fire({
                            title: "ผิดพลาด!",
                            text: "กรุณาลองใหม่!",
                            type: "warning",
                            icon: "error"
                        });';
                        echo '}, 500 );</script>';
            
                        echo '<script type="text/javascript">';
                        echo 'setTimeout(function () { 
                            window.location.href = "enroll.php";';
                        echo '}, 2000 );</script>';
                    }
            } else {
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal.fire({
                            title: "ผิดพลาด!",
                            text: "กรุณาลองใหม่!",
                            type: "warning",
                            icon: "error"
                        });';
                echo '}, 500 );</script>';

                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { 
                            window.location.href = "enroll.php";';
                echo '}, 2000 );</script>';
            }
        } else {
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal.fire({
            title: "ผิดพลาด!",
            text: "อีเมลนี้มีอยู่แล้ว!",
            type: "warning",
            icon: "error"
            });';
            echo '}, 500 );</script>';

            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { 
            window.location.href = "enroll.php";';
            echo '}, 3000 );</script>';
        }
            
    } else {
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal.fire({
            title: "ผิดพลาด!",
            text: "ไม่ได้ส่งข้อมูลจากหน้าฟอร์ม!",
            type: "warning",
            icon: "error"
        });';
        echo '}, 500 );</script>';

        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { 
            window.location.href = "enroll.php";';
        echo '}, 2000 );</script>';
    }
?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>ระบบสมัครเรียน</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css"
        href="../app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css"
        href="../app-assets/css/plugins/extensions/ext-component-sweet-alerts.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->

    <!-- BEGIN: fonts-->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');

    body {
        font-family: 'Prompt', sans-serif;
        font-size: 16px;
    }

    .new-title-css {
        font-family: 'Prompt', sans-serif;
        font-size: 26px;
        font-weight: revert;
    }
    </style>
    <!-- END: fonts-->

</head>
<!-- END: Head-->


<!-- BEGIN: Vendor JS-->
<script src="../app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="../app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../app-assets/js/core/app-menu.js"></script>
<script src="../app-assets/js/core/app.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="../app-assets/js/scripts/forms/form-select2.js"></script>
<script src="../app-assets/js/scripts/extensions/ext-component-sweet-alerts.js"></script>
<script src="../app-assets/js/scripts/tables/table-datatables-basic.js"></script>
<!-- END: Page JS-->

</html>