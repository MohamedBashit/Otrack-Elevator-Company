<?php 
    if(!isset($_SESSION['admin_name']))
    {
        header("location:".BUA.'login.php');
    }
?>
<!doctype html>
<html dir="rtl" lang="ar">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/bootstrap.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/style.css" >

    <title>Dashboard | Home Page</title>
  </head>
  <body>



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo BUA ?>"> <img src="<?php echo BU.'assets/logo/otrack.png'; ?>" width="70" alt="LOGO"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo BUA ?>">الصفحة الرئيسية <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    المدن
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo BUA.'cities/add.php' ?>">اضافة مدينة جديدة</a>
                        <a class="dropdown-item" href="<?php echo BUA.'cities/' ?>">عرض جميع المدن </a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    الخدمات
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo BUA.'services/add.php' ?>">اضافة خدمة جديدة</a>
                        <a class="dropdown-item" href="<?php echo BUA.'services/' ?>"> عرض جميع الخدمات</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    الطلبات
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo BUA.'orders/' ?>">عرض جميع الطلبات</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    الأدمن
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo BUA.'admins/add.php' ?>">اضافة أدمن جديد</a>
                        <a class="dropdown-item" href="<?php echo BUA.'admins/' ?>">عرض جميع الأدمن</a>
                    </div>
                </li>


                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo BU; ?>" target="_blank">الذهاب إلي الموقع</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"  href="<?php echo BUA.'logout.php'; ?>">تسجيل الخروج</a>
                </li>

            </ul>

            
        </div>
    </nav>


    <div class="container-fluid mt-5 mb-5">
        <div class="row"> 


        