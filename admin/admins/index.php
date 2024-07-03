<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>

    <div class="col-sm-12">
        <h3 class="text-center p-3 bg-primary text-white">عرض جميع الأدمن</h3>
        <table class="table table-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">مسلسل</th>
                    <th scope="col">اسم الأدمن</th>
                    <th scope="col">البريد الألكتروني</th>
                    
       
                </tr>
            </thead>
            <tbody>
                <?php $data = getRows('admins');  $x=1; ?>
                <?php foreach($data as $row){   ?>
                <tr class="text-center">
                    <td scope="row"><?php echo $x; ?></td>
                    <td class="text-center"> <?php echo $row['admin_name'] ?>  </td>
                    <td class="text-center"> <?php echo $row['admin_email'] ?>  </td>
                </tr>
                <?php $x++; } ?>
               
            </tbody>
        </table>
    </div>


<?php require BLA.'inc/footer.php';  ?>




   

