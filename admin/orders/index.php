<?php require '../../config.php';  ?>

<?php require BLA.'inc/header.php';  ?>


    <div class="col-sm-12">
        <h3 class="text-center p-3 bg-primary text-white">عرض جميع الطلبات</h3>
        <table class="table table-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">مسلسل</th>
                    <th scope="col">الأسم</th>
                    <th scope="col">البريد الألكتروني</th>
                    <th scope="col">رقم الهاتف</th>
                    <th scope="col">نوع الخدمة</th>
                    <th scope="col">المدينة</th>
                    <th scope="col">تفصيل أكثر</th>
                    <th scope="col">إتخاذ اجراء</th>
       
                </tr>
            </thead>
            <tbody>
                <?php $data = getRows('orders');  $x=1; ?>
                <?php foreach($data as $row){   ?>
                <tr class="text-center">
                    <td scope="row"><?php echo $x; ?></td>
                    <td class="text-center"><?php echo $row['order_name']; ?></td>
                    <td class="text-center"><?php echo $row['order_email']; ?></td>
                    <td class="text-center"><?php echo $row['order_phone']; ?></td>
                    <?php

                        $rowCity = getRow('city_id',$row['order_city_id'],'cities');
                        $rowService = getRow('serv_id',$row['order_serv_id'],'services');
                    ?>
                    <td class="text-center"><?php echo  $rowService['serv_name']; ?></td>
                    <td class="text-center"><?php echo $rowCity['city_name']; ?></td>
                    <td class="text-center"><?php echo $row['order_note']; ?></td>
                    
                    <td class="text-center">
                        <a href="#" class="btn btn-danger delete" data-field="order_id" data-id="<?php echo $row['order_id']; ?>" data-table="orders" >حذف</a>
                    </td>
                </tr>
                <?php $x++; } ?>
               
            </tbody>
        </table>
    </div>

<?php require BLA.'inc/footer.php';  ?>




   

