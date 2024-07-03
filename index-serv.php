<?php  require 'config.php';  ?>
<?php require BL.'functions/validate.php';  ?>

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
    <link rel = "icon" href = "assets/logo/otrack.png" type = "image/x-icon">
    <title>Home Page</title>
  </head>
  <body>
   


    <div class="cont-main" style="background:url(<?php echo ASSETS .'photo/bg-data.jpg';?>)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                <?php 
                if (isset($_POST['submit'])) 
                {
                    $service = $_POST['service'];
                    $city = $_POST['city'];
                    $mobile = $_POST['mobile'];
                    $name =  sanitizeString($_POST['name']);
                    $email = sanitizeString($_POST['email']);
                    $notes = sanitizeString($_POST['notes']);
                    
                    if (checkEmpty($mobile) && checkEmpty($name)) 
                    {
                        
                        $sql  = "INSERT INTO orders (`order_name`,`order_email`,`order_phone`,`order_serv_id`,`order_city_id`,`order_note`)
                            VALUES ('$name','$email','$mobile','$service','$city','$notes')
                         ";
                         $success_message = db_insert($sql);
                    }
                    else 
                    {
                        $error_message = "برجاء كتابة الأسم ورقم الهاتف المحمول ";
                    }

                    
                    
                }
        ?>




                <form class="row" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="mt-5" >
                    <?php require BL.'functions/error.php'; ?>
                    <div class="col-sm-6 ">
                        <div class="form-group mt-3">

                            <label for="serv" class="font-1">اختار الخدمة</label>
                            <select name="service" id="serv" class="form-control font-1">
                                <?php $data = getRows('services');  $x=1; ?>
                                <?php foreach($data as $row){   ?>
                                <option value="<?php echo $row['serv_id']; ?>">
                                    <?php echo $row['serv_name']; ?>
                                </option>
                                <?php } ?> 
                            </select>
                            
                        </div>
                    </div>


                    <div class="col-sm-6 ">
                        <div class="form-group mt-3">

                            <label for="serv" class="font-1">اختار المدينة</label>
                            <select name="city" id="serv" class="form-control font-1">
                                <?php $dataCity = getRows('cities');  $x=1; ?>
                                <?php foreach($dataCity as $row){   ?>
                                <option value="<?php echo $row['city_id']; ?>">
                                    <?php echo $row['city_name']; ?>
                                </option>
                                <?php } ?> 
                            </select>
                            
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">

                            <label for="serv" class="font-1">برجاء ادخال الأسم *</label>
                            <input type="text" name="name"  class="form-control font-1 bg-base">
                            
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="form-group ">

                            <label for="serv" class="font-1">برجاء ادخال البريد الألكتروني</label>
                            <input type="email" name="email"  class="form-control font-1 bg-base">
                            
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <div class="form-group ">

                            <label for="serv" class="font-1">برجاء ادخال رقم الهاتف *</label>
                            <input type="text" name="mobile"  class="form-control font-1 bg-base">
                            
                        </div>
                    </div>
                    



                    <div class="col-sm-12">
                        <div class="form-group">

                            <label for="serv" class="font-1">تفاصيل أكثر</label>
                            <textarea name="notes"  class="form-control font-1 bg-base"  rows="5"></textarea>
                            
                        </div>
                    </div>



                    
                    <div class="col-sm-12">
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-success form-control">ارسال البيانات</button>
                        </div>
                    </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo ASSETS; ?>/js/jquery-3.4.1.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/popper.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/bootstrap.min.js" ></script>
  </body>
</html>