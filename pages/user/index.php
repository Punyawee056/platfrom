<?php 
  require_once('../includes/authen.php');

    $sql_user = "SELECT * FROM view_user ORDER BY id DESC";
    $result_user = $conn->query($sql_user);
?>

<!DOCTYPE html>
<html class="loading bordered-layout" lang="en" data-layout="bordered-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>ผู้ใช้งาน</title>
    <link rel="apple-touch-icon" href="../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css"
        href="../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="../../app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="../../app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/extensions/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/pages/app-user.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
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

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <?php require_once('../includes/menu.php'); ?>

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">ผู้ใช้งาน</h2>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12">
                    <div class="form-group breadcrumb-right">
                        <div class="text-right mr-4">
                            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal"
                                data-target="#AddModal" style="width: 164px;"><i data-feather='plus-circle'></i>
                                เพิ่มข้อมูล</button>
                        </div>

                        <div class="modal fade text-left" id="AddModal" tabindex="-1" role="dialog"
                            aria-labelledby="AddModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="AddModalLabel"><i data-feather='plus-circle'></i>
                                            เพิ่มข้อมูล </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="sql/insert.php" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label>Dealer : </label>
                                                <select class="select2 form-control form-control-md" name="dealer_id" id="dealer"
                                                    required>
                                                    <option value="">-- เลือก Dealer --</option>
                                                        <?php 
                                                            $sql_dealer = "SELECT * FROM `dealer` ORDER BY `code` ASC";
                                                            $result_dealer = $conn->query($sql_dealer);
                                                        ?>
                                                        
                                                         <?php while($result = $result_dealer->fetch_assoc()): ?>
                                                            <option value="<?=$result['id']?>"><?=$result['code'].' : '.$result['name']?></option>
                                                        <?php endwhile; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Location</label>
                                                <select class="select2 form-control form-control-md" id="location" name="location_id">
                                                    <option value="">-- เลือก Location --</option>
                                                </select>
										    </div>
                                            <label>รหัสผู้ใช้งาน : </label>
                                            <div class="form-group">
                                                <input type="text" placeholder="รหัสผู้ใช้งาน" class="form-control"
                                                    name="code" maxlength="10" required />
                                            </div>
                                            <label>ชื่อ : </label>
                                            <div class="form-group">
                                                <input type="text" placeholder="ชื่อ" class="form-control" name="fname"
                                                    maxlength="100" required />
                                            </div>
                                            <label>นามสกุล : </label>
                                            <div class="form-group">
                                                <input type="text" placeholder="นามสกุล" class="form-control"
                                                    name="lname" maxlength="100" required />
                                            </div>
                                            <label>เบอร์โทรศัพท์ : </label>
                                            <div class="form-group">
                                                <input type="text" placeholder="เบอร์โทรศัพท์" class="form-control"
                                                    name="phone" maxlength="50" required />
                                            </div>
                                            <label>อีเมล : </label>
                                            <div class="form-group">
                                                <input type="email" placeholder="อีเมล" class="form-control"
                                                    name="email" maxlength="100" required />
                                            </div>
                                            <label>รหัสผ่าน : </label>
                                            <div class="form-group">
                                                <input type="password" placeholder="รหัสผ่าน" class="form-control"
                                                    name="password" maxlength="20" required />
                                            </div>
                                            <label>ยืนยันรหัสผ่าน : </label>
                                            <div class="form-group">
                                                <input type="password" placeholder="ยืนยันรหัสผ่าน" class="form-control"
                                                    name="confirm_password" maxlength="20" required />
                                            </div>
                                            <div class="form-group demo-inline-spacing mt-2">
                                                <label style="margin-top: 0rem;">บทบาท :</label>
                                                <?php 
                                                        $sql_role = "SELECT * FROM `role` ORDER BY `id` DESC";
                                                        $result_role = $conn->query($sql_role);
                                                        if ($result_role->num_rows) {
                                                        while($row_role = $result_role->fetch_assoc()) { 
                                                    ?>
                                                <div class="custom-control custom-radio"
                                                    style="margin-top: 0px;margin-left: 20px;">
                                                    <input type="radio" id="customRadio<?php echo $row_role['id']; ?>" name="customRadio"
                                                        class="custom-control-input" value="<?php echo $row_role['id']; ?>" required>
                                                    <label class="custom-control-label"
                                                        for="customRadio<?php echo $row_role['id']; ?>"><?php echo $row_role['role']; ?></label>
                                                </div>
                                                <?php 
                                                        }
                                                    } 
                                                ?>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="submit" class="btn btn-primary">บันทึก</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">ยกเลิก</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <table class="datatables-basic table">
                                    <thead class="thead-default">
                                        <tr>
                                            <!-- <th class="text-center" style="width: 110px;">ลำดับ</th> -->
                                            <th class="text-center">ชื่อ - นามสกุล / รหัส</th>
                                            <th class="text-center">เบอร์โทรศัพท์</th>
                                            <th class="text-center">อีเมล</th>
                                            <th class="text-center">Dealer</th>
                                            <th class="text-center">Loction</th>
                                            <th class="text-center">บทบาท</th>
                                            <th class="text-center">จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $num = 0;
                                        while($row_user = $result_user->fetch_assoc()){
                                        $num++;
                                    ?>
                                        <tr>
                                            <!-- <td class="text-center" style="width: 110px;"><?php echo $num; ?></td> -->
                                            <td class="sorting_1">
                                                <div class="d-flex justify-content-left align-items-center">
                                                    <div class="avatar bg-light-dark mr-1">
                                                        <?php if(isset($row_user['image']) && $row_user['image'] !='avatar.png'){ ?>
                                                        <img class="avatar-content"
                                                            src="../images/user/<?php echo  $row_user['image']; ?>">
                                                        <?php } else { ?>
                                                        <span
                                                            class="avatar-content"><?php echo substr($row_user['fname'],0,1).substr($row_user['lname'],0,1) ?></span>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span
                                                            class="emp_name text-truncate font-weight-bold"><?php echo $row_user['fname'].' '.$row_user['lname']; ?></span>
                                                        <small
                                                            class="emp_post text-truncate text-muted"><?php echo $row_user['code']; ?></small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center"><?php echo $row_user['phone']; ?></td>
                                            <td><?php echo $row_user['email']; ?></td>
                                            <td><?php echo $row_user['dealer']; ?></td>
                                            <td><?php echo $row_user['location']; ?></td>
                                            <td class="text-center">
                                            <div class="badge badge-pill badge-light-<?php echo $row_user['color']; ?>"><?php echo $row_user['role_name']; ?></div>
                                            </td>
                                            <td class="text-center" style="width: 220px;">
                                                <a class="btn btn-warning btn-icon box-shadow" style="width: 79.25px;"
                                                    data-toggle="modal"
                                                    data-target="#EditModel<?php echo $row_user['id']; ?>"><i
                                                        data-feather='edit'></i> แก้ไข</a>
                                                <?php if($row_user['id'] != '1') { ?>
                                                <a href="#" class="btn btn-danger btn-icon box-shadow"
                                                    onclick="deleteItem(<?php echo $row_user['id']; ?>,'<?php echo $row_user['fname'].' '.$row_user['lname']; ?>');"
                                                    style="width: 79.25px;"><i data-feather='trash-2'></i> ลบ</a>
                                                <?php } ?>
                                            </td>
                                        </tr>

                                        <!-- BEGIN: Edit-->
                                        <div class="modal fade text-left"
                                            id="EditModel<?php echo $row_user['id']; ?>" tabindex="-1" role="dialog"
                                            aria-labelledby="EditModalLabel<?php echo $row_user['id']; ?>"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title"
                                                            id="EditModalLabel<?php echo $row_user['id']; ?>"><i
                                                                data-feather='edit'></i> แก้ไขข้อมูล</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="sql/update.php" method="post"
                                                        enctype="multipart/form-data">
                                                        <div class="modal-body">

                                                        <div class="form-group">
                                                        <label>Dealer : </label>
                                                        <!-- onchange="myFunction()" -->
                                                        <select class="select2 form-control form-control-md" id="dealer<?php echo $row_user['id']; ?>"  required>
                                                            <option value="">-- เลือก Dealer --</option>
                                                                <?php 
                                                                    $sql_dealer = "SELECT * FROM `dealer` ORDER BY `code` ASC";
                                                                    $result_dealer = $conn->query($sql_dealer);
                                                                    if ($result_dealer->num_rows){
                                                                        while($result = $result_dealer->fetch_assoc()) { 
                                                                            if($row_user['dealer_id'] == $result['id'])
                                                                            {
                                                                            $sel = "selected";
                                                                            }
                                                                            else
                                                                            {
                                                                            $sel = "";
                                                                            } 
                                                                ?>
                                                                    <option value="<?=$result['id']?>" <?php echo $sel;?>><?=$result['code'].' : '.$result['name']?></option>
                                                                <?php 
                                                                        }
                                                                    } 
                                                                ?>   
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Location</label>
                                                        <select class="select2 form-control form-control-md" id="location<?php echo $row_user['id']; ?>" >
                                                        <option value="">-- เลือก Location --</option>
                                                        <?php 
                                                            $sql_location = "SELECT * FROM `location` WHERE `dealer_id` = '".$row_user['dealer_id']."' ";
                                                            $result_location = $conn->query($sql_location);
                                                            if ($result_location->num_rows){
                                                            while($row_location = $result_location->fetch_assoc()) { 
                                                                                                    
                                                                if($row_user['location_id'] == $row_location['id'])
                                                                {
                                                                $sel = "selected";
                                                                }
                                                                else
                                                                {
                                                                $sel = "";
                                                                } 
                                                            ?>
                                                            <option value="<?php echo $row_user['location_id']; ?>" <?php echo $sel;?>>
                                                                <?php echo $row_location['code'].' : '.$row_location['name']; ?>
                                                            </option>
                                                            <?php 
                                                                    }
                                                                } 
                                                            ?>  
                                                        </select>
                                                    </div>
                                                  
                                                    <input type="hidden" name="dealer_id" id="dealer_txt<?php echo $row_user['id']; ?>">
                                                    <input type="hidden" name="location_id" id="location_txt<?php echo $row_user['id']; ?>"> 
                                                    
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script language="JavaScript" type="text/javascript">
     $(function(){
        var dealerObject = $('#dealer<?php echo $row_user['id']; ?>');
        var locationObject = $('#location<?php echo $row_user['id']; ?>');

        // on change dealer
        dealerObject.on('change', function(){
            var dealerId = $(this).val();
            // console.log(dealerId);
            $("#dealer_txt<?php echo $row_user['id']; ?>").val(dealerId);

            locationObject.html('<option value="">-- เลือก Location --</option>');

            $.get('../get_location.php?dealer_id=' + dealerId, function(data){
                var result = JSON.parse(data);
                $.each(result, function(index, item){
                    locationObject.append(
                        $('<option></option>').val(item.id).html(item.code + ' : ' + item.name)
                    );
                });
            });
        });

        // on change location
        locationObject.on('change', function(){
            var locationId = $(this).val();
            $("#location_txt<?php echo $row_user['id']; ?>").val(locationId);
        });
    });

</script>

                                                            <label>รหัสผู้ใช้งาน : </label>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="รหัสผู้ใช้งาน"
                                                                    class="form-control" name="code" maxlength="10"
                                                                    value="<?php echo $row_user['code']; ?>"
                                                                    required />
                                                            </div>
                                                            <label>ชื่อ : </label>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="ชื่อ"
                                                                    class="form-control" name="fname" maxlength="100"
                                                                    value="<?php echo $row_user['fname']; ?>"
                                                                    required />
                                                            </div>
                                                            <label>นามสกุล : </label>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="นามสกุล"
                                                                    class="form-control" name="lname" maxlength="100"
                                                                    value="<?php echo $row_user['lname']; ?>"
                                                                    required />
                                                            </div>
                                                            <label>เบอร์โทรศัพท์ : </label>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="เบอร์โทรศัพท์"
                                                                    class="form-control" name="phone" maxlength="50"
                                                                    value="<?php echo $row_user['phone']; ?>"
                                                                    required />
                                                            </div>
                                                            <label>อีเมล : </label>
                                                            <div class="form-group">
                                                                <input type="email" placeholder="อีเมล" class="form-control"
                                                                    name="email" maxlength="100" value="<?php echo $row_user['email']; ?>" required />
                                                            </div>
                                                            <div class="form-group demo-inline-spacing mt-2">
                                                                <label style="margin-top: 0rem;">บทบาท :</label>
                                                                <?php 
                                                                    $sql_role = "SELECT * FROM `role` ORDER BY `id` DESC";
                                                                    $result_role = $conn->query($sql_role);
                                                                    if ($result_role->num_rows) {
                                                                    while($row_role = $result_role->fetch_assoc()) { 
                                                                        if($row_user['role'] == $row_role['id'])
                                                                            {
                                                                                $sel = "checked";
                                                                            }
                                                                            else
                                                                            {
                                                                                $sel = "";
                                                                            } 
                                                                ?>
                                                                <div class="custom-control custom-radio"
                                                                    style="margin-top: 0px;margin-left: 20px;">
                                                                    <input type="radio" id="customRadio<?php echo $row_role['id']; ?><?php echo $row_user['id']; ?>" name="customRadio"
                                                                        class="custom-control-input" <?php echo $sel; ?> <?php if($row_user['id'] == '1'){ echo 'disabled'; } ?> value="<?php echo $row_role['id']; ?>">
                                                                    <label class="custom-control-label"
                                                                        for="customRadio<?php echo $row_role['id']; ?><?php echo $row_user['id']; ?>"><?php echo $row_role['role']; ?></label>
                                                                </div>
                                                                <?php 
                                                                        }
                                                                    } 
                                                                ?>
                                                                
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="user_id"
                                                            value="<?php echo $row_user['id']; ?>">
                                                        <div class="modal-footer">
                                                            <button type="submit" name="submit"
                                                                class="btn btn-primary">บันทึก</button>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">ยกเลิก</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Edit-->

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php require_once('../includes/footer.php'); ?>

    <!-- BEGIN: Vendor JS-->
    <script src="../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="../../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="../../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="../../app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js"></script>
    <script src="../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script>
    <script src="../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../app-assets/js/core/app-menu.js"></script>
    <script src="../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../app-assets/js/scripts/pages/app-user-list.js"></script>
    <script src="../../app-assets/js/scripts/tables/table-datatables-basic.js"></script>
    <script src="../../app-assets/js/scripts/forms/form-select2.js"></script>
    <!-- END: Page JS-->

    <script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })

        $(function(){
        var dealerObject = $('#dealer');
        var locationObject = $('#location');

        // on change dealer
        dealerObject.on('change', function(){
            var dealerId = $(this).val();

            locationObject.html('<option value="">-- เลือก Location --</option>');

            $.get('../get_location.php?dealer_id=' + dealerId, function(data){
                var result = JSON.parse(data);
                $.each(result, function(index, item){
                    locationObject.append(
                        $('<option></option>').val(item.id).html(item.code + ' : ' + item.name)
                    );
                });
            });
        });

    });

    // รูป
    $('.custom-file-input').on('change', function() {
        var size = this.files[0].size / 1024 / 1024
        if (size.toFixed(25) > 25) {
            alert('ขนาดไฟล์ต้องไม่เกิน 25MB')
        } else {
            var fileName = $(this).val().split('\\').pop()
            $(this).siblings('.custom-file-label').html(fileName)
            if (this.files[0]) {
                var reader = new FileReader()
                $('.figure').addClass('d-block')
                reader.onload = function(e) {
                    $('#imgUpload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0])
            }
        }
    })

    // ลบ
    function deleteItem(id, name) {
        Swal.fire({
            title: 'ต้องการลบข้อมูล ' + name + ' หรือไม่?',
            type: "warning",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: 'ลบ',
            cancelButtonText: 'ยกเลิก',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = `sql/delete.php?user_id=${id}`;
            }
        })
    }

    // dataTable
    $.extend(true, $.fn.dataTable.defaults, {
        "language": {
            "sProcessing": "กำลังดำเนินการ...",
            "sLengthMenu": "แสดง  _MENU_ แถว",
            "sZeroRecords": "ไม่พบข้อมูล",
            "sInfo": "แสดง  _START_  ถึง _END_  จาก _TOTAL_  แถว",
            "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
            "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
            "sInfoPostFix": "",
            "sLength": "แถว",
            "sSearch": "ค้นหา:",
            "sSearchPlaceholder": "ค้นหา",
            "sUrl": "",
            "oPaginate": {
                "sFirst": "เริ่มต้น",
                "sPrevious": "ก่อนหน้า",
                "sNext": "ถัดไป",
                "sLast": "สุดท้าย"
            }
        }
    });
    </script>
</body>
<!-- END: Body-->

</html>