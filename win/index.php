<?php 
include './inc/conn.php';
include './inc/form.php';
include './inc/db_close.php';
include './inc/celect.php';

?>

<?php include_once './parts/header.php'; ?>

<div class="container">

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">اربح معنا</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <p id="demo"></p>
      <p class="lead fw-normal">للسحب على قسيمة مجانية</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>

  <ul class="list-group list-group-flush">
  <li class="list-group-item">تاريخ البث موجود على يوتيوب</li>
  <li class="list-group-item">البث سيستمر ساعة</li>
  <li class="list-group-item">وقت البث سيتم فتح التسجيل</li>
  <li class="list-group-item">نهاية البث سيتم الاختيار بشكل عشوائي</li>
  <li class="list-group-item">الفائز سيحصل على قسيمة</li>
</ul>

<form class="mt-5" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h3>الرجاء ادخل معلوماتك</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الإسم الأول</label>
    <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الأخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">البريد الإلكتروني</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $emil ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>
  
  <button type="submit" class="btn btn-primary">إرسال</button>
</form>
</div>
</div>
<div class="loader-con">
  <div id="loader">
    <canvas id="circularLoader" width="200" height="200"></canvas>
  </div>
</div>



<div class="d-grid gap-2 col-6 mx-auto my-5">
  <button type="button" id="winner" class="btn btn-primary">
  اختيار الرابح
  </button>
</div>


<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="modalLabel">الفائز</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">  
<?php foreach ($users as $user) : ?>
  <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']); ?></h1>
      </div>
      <?php endforeach;  ?>

  </div>
    </div>
       </div>

<?php include_once './parts/footer.php'; ?>