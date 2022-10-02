<?php 
    require_once('authen.php');
    $uri = $_SERVER['REQUEST_URI']; 
    $array = explode('/', $uri);
    $key = array_search("pages", $array);
    $pages = $array[$key + 1];
    $pages2 = $array[$key + 2];


    $sql_me = "SELECT * FROM view_user WHERE id = '".$_SESSION['id']."'";
    $result_me = $conn->query($sql_me);
    $row_me = $result_me->fetch_assoc();
?>

<!-- BEGIN: fonts-->
<style>
@import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');

body {
    font-family: 'Prompt', sans-serif;
    font-size: 16px;
}

.new-title-css {
    font-family: 'Prompt', sans-serif;
    font-size: 16px;
    /* font-weight: revert; */
}

.custom_active {
    background: linear-gradient(118deg, #7367f0, rgba(115, 103, 240, 0.7));
    /* box-shadow: 0px 0px 6px 1px rgba(115, 103, 240, 0.6); */
    border-radius: 4px;
    color: #ffffff !important;
}

a:hover {
    color: black !important;
}
</style>
<!-- END: fonts-->

<?php //if($row_me['role'] == 1 || $row_me['role'] == '2') { ?>
<!-- BEGIN: Header-->
<nav
    class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow new-title-css">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon"
                            data-feather="menu"></i></a></li>
            </ul>
            <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block">
                    <h3>ระบบสมัครเรียน</h3>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">
            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none">
                        <span
                            class="user-name font-weight-bolder"><?php echo $row_me['fname'] .' '. $row_me['lname']; ?></span>
                        <span class="user-status"><?php echo  $row_me['email']; ?></span>
                    </div>
                    <div class="avatar bg-light-dark mr-1">
                        <?php if(isset($row_me['image']) && $row_me['image'] !='avatar.png'){ ?>
                        <img class="avatar-content" src="../images/user/<?php echo  $row_me['image']; ?>" height="40"
                            width="40">
                        <?php } else { ?>
                        <span class="avatar-content" height="40"
                            width="40"><?php echo substr($row_me['fname'],0,1).substr($row_me['lname'],0,1) ?></span>
                        <?php } ?>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="../profile/index.php"><i class="mr-50" data-feather="user"></i>
                        โปรไฟล์</a>
                    <a class="dropdown-item" href="../profile/password.php"><i class="mr-50" data-feather="key"></i>
                        เปลี่ยนรหัสผ่าน</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="../logout.php"><i class="mr-50"
                            data-feather="power"></i> ออกจากระบบ</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow new-title-css" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand"
                    href=""><span class="brand-logo">
                        <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                            <defs>
                                <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                    y2="89.4879456%">
                                    <stop stop-color="#000000" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                                <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%"
                                    y2="100%">
                                    <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                    <g id="Group" transform="translate(400.000000, 178.000000)">
                                        <path class="text-primary" id="Path"
                                            d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                            style="fill:currentColor"></path>
                                        <path id="Path1"
                                            d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                            fill="url(#linearGradient-1)" opacity="0.2"></path>
                                        <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                            points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                        </polygon>
                                        <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                            points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                        </polygon>
                                        <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                            points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                    </g>
                                </g>
                            </g>
                        </svg></span>
                    <h2 class="brand-text">Welcome</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i></a></li>
        </ul>
    </div>
    
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main new-title-css" id="main-menu-navigation" data-menu="menu-navigation">
            <?php if($row_me['role'] == '1') { ?>
            <li class=" navigation-header"><span data-i18n="ข้อมูลพื้นฐาน" class="new-title-css">ข้อมูลพื้นฐาน</span><i
                    data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a
                    class="d-flex align-items-center <?php echo $pages == 'academic_year' ? 'custom_active': '' ?>"
                    href="../academic_year/index.php"><i data-feather="calendar"></i><span class="menu-title text-truncate"
                        data-i18n="academic_year">ปีการศึกษา</span></a>
            </li>
            <li class=" nav-item"><a
                    class="d-flex align-items-center <?php echo $pages == 'level' ? 'custom_active': '' ?>"
                    href="../level/index.php"><i data-feather="layers"></i><span class="menu-title text-truncate"
                        data-i18n="level">ระดับชั้น - สาขา</span></a>
            </li>
            <li class=" nav-item"><a
                    class="d-flex align-items-center <?php echo $pages == 'prefix' ? 'custom_active': '' ?>"
                    href="../prefix/index.php"><i data-feather="hash"></i><span class="menu-title text-truncate"
                        data-i18n="prefix">คำนำหน้า</span></a>
            </li>
            <?php } ?>

            <li class=" navigation-header"><span data-i18n="การรับสมัคร" class="new-title-css">การรับสมัคร</span><i
                    data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a
                    class="d-flex align-items-center <?php echo $pages == 'enroll' ? 'custom_active': '' ?>"
                    href="../enroll/index.php"><i data-feather="tablet"></i><span class="menu-title text-truncate"
                        data-i18n="enroll">สมัครเรียน</span></a>
            </li>
            
            <?php if($row_me['role'] == '1' || $row_me['role'] == '2') { ?>
                <li class=" navigation-header"><span data-i18n="ผู้ใช้งาน" class="new-title-css">ข้อมูลผู้ใช้งาน</span><i
                    data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a
                        class="d-flex align-items-center <?php echo $pages == 'user' ? 'custom_active': '' ?>"
                        href="../user/index.php"><i data-feather="user"></i><span class="menu-title text-truncate"
                            data-i18n="user">ผู้ใช้งาน</span></a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
<?php //} ?>