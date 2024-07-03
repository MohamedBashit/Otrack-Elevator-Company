<?php require '../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>


  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">جميع الخدمات</h5>
        <p class="card-text">جميع الخدمات التي تقدمها الشركة حاليا.</p>
        <a href="<?php echo BUA.'services/' ?>" class="btn btn-primary"><?php echo count_table('services'); ?></a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">جميع المدن</h5>
        <p class="card-text">جميع المدن التي تغطيها الشركة حاليا.</p>
        <a href="<?php echo BUA.'cities/' ?>" class="btn btn-primary"><?php echo count_table('cities'); ?></a>
      </div>
    </div>
  </div>


  <div class="col-sm-6 mt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">جميع الطلبات</h5>
        <p class="card-text">جميع الطلبات التي تمت من خلال الموقع.</p>
        <a href="<?php echo BUA.'orders/' ?>" class="btn btn-primary"><?php echo count_table('orders'); ?></a>
      </div>
    </div>
  </div>


  <div class="col-sm-6 mt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">جميع طلبات هذا اليوم</h5>
        <p class="card-text">الطلبات التي تمت من خلال الموقع اليوم فقط.</p>
        <a href="<?php echo BUA.'orders/' ?>" class="btn btn-primary"><?php echo count_table('orders'); ?></a>
      </div>
    </div>
  </div>



 

<?php require BLA.'/inc/footer.php';  ?>



   

