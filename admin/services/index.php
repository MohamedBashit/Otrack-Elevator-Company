<?php require '../../config.php';  ?>

<?php require BLA.'inc/header.php';  ?>

    <div class="col-sm-12">
        <h3 class="text-center p-3 bg-primary text-white">عرض جميع الخدمات</h3>
        <table class="table table-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">مسلسل</th>
                    <th scope="col">اسم الخدمة</th>
                    <th scope="col">اتخاذ اجراء</th>
       
                </tr>
            </thead>
            <tbody>
                <?php $data = getRows('services');  $x=1; ?>
                <?php foreach($data as $row){   ?>
                <tr class="text-center">
                    <td scope="row"><?php echo $x; ?></td>
                    <td class="text-center"> <?php echo $row['serv_name'] ?>  </td>
                    
                    <td class="text-center">
                        <a href="<?php echo BUA.'services/edit.php?id='.$row['serv_id']; ?>" class="btn btn-info">تعديل</a>
                        <a href="#" class="btn btn-danger delete btn-info" data-field="serv_id" data-id="<?php echo $row['serv_id']; ?>" data-table="services" >حذف</a>
                    </td>
                </tr>
                <?php $x++; } ?>
               
            </tbody>
        </table>
    </div>


<?php require BLA.'inc/footer.php';  ?>




   

