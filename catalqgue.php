<!DOCTYPE html>
<html dir = "rtl" lang="ar">
<head>
    <meta chraset = "UTF-8">
    <!-- First Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Catalqgue</title>
    <!-- File Bootstrap -->
    <!-- <link rel = "stylesheet" href = "css/bootstrap.css"> -->
    <!-- File Normalize -->
    <link rel = "stylesheet" href = "assets/css/normalize.css">
    <!-- File Style -->
    <link rel = "stylesheet" href = "assets/css/main.css">
    <!-- File Style Font Awesome -->
    <link rel = "stylesheet" href = "assets/css/all.min.css">
    <link rel = "icon" href = "assets/logo/otrack.png" type = "image/x-icon">
</head>
<body> 
<!-- Start Navigation Bar -->
    <div class="nav">
        <div class="container">
            <div class="logo"><img src="assets/logo/otrack.png" alt="logo"></div>
            <div class="links-container">
                <ul class="links">
                    <li class = "basic"><a href="index.php">الصفحة الرئيسية</a></li>
                    <li class = "basic"><a href="index.php#about">عن الشركة</a></li>
                    <li class = "basic"><a href="#products" class = "items-products">
                        منتجات 
                        <i class="fa-solid fa-caret-down"></i>
                    </a></li>
                    <ul class="menu-prod">
                        <li><a href="#" >مصاعد</a></li>
                        <li><a href="#" >سلالم كهربائية</a></li>
                        <li><a href="#" >ابراج خارجية</a></li>
                        <li><a href="#" >مشايات متحركة</a></li>
                    </ul>
                    <li class = "basic"><a href="#services" class ="items-services">
                        خدمات 
                        <i class="fa-solid fa-caret-down"></i>
                    </a></li>
                        <ul class="menu-serv">
                            <li><a href="index-serv.php" >تركيب</a></li>
                            <li><a href="index-serv.php" >صيانة</a></li>
                            <li><a href="index-serv.php" >استشارة هندسية</a></li>
                        </ul>
                    <li class = "basic"><a href="catalqgue.php" class = "active">كتالوج</a></li>
                    <li class = "basic"><a href="#footer">اتصل بنا</a></li>
                </ul>
                <button class="toggle-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
    </div>
</div>
<!-- End Navigation Bar -->


    <div class="catalqgues">
        <div class="container">
            <div class="cabins">
                <a download="cabins" href = "assets/pdf/cabins.pdf"><img src="./assets/photo/catalogue-cabins.png"></a>
            </div>
            <div class="doors">
                <a download="doors" href = "assets/pdf/o-track elevators.pdf"><img src="./assets/photo/semi automatic doors.png"></a>
            </div>
        </div>
    </div>


<!-- Start Footer -->
<div class="footer" id ="footer">
    <div class="logo-footer"><img src="assets/logo/otrack.png" alt="logo"></div>
        <div class="container">
            <div class="data">
                <h3><i class="fa-solid fa-location-dot"></i>  محافظة دمياط - دمياط الجديدة - بجوار جامعة دمياط</h3>
                <h3><i class="fa-solid fa-phone-volume"></i> +0102 000 000 000</h3>
                <h3><i class="fa-solid fa-envelope"></i> otrack00@gmail.com</h3>
                <div class="social">
                    <a href="#"><h3><i class="fa-brands fa-facebook"></i></h3></a>
                    <a href="#"><h3><i class="fa-brands fa-square-instagram"></i></h3></a>
                    <a href="#"><h3><i class="fa-brands fa-linkedin"></i></h3></a>
                </div>
            </div>
        <div class="location">
            <iframe class="location-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.405379586091!2d31.655668625233528!3d31.430505051577924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f9e2407034af29%3A0x39993d6b703b9095!2z2YXYr9mK2YbYqSDYr9mF2YrYp9i3INin2YTYrNiv2YrYr9ip2Iwg2YXYrdin2YHYuNipINiv2YXZitin2Lc!5e0!3m2!1sar!2seg!4v1717590860876!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<!-- End Footer -->
    <script src="js/catalogue.js"></script>
<!-- End Js -->
</body> 
</html>