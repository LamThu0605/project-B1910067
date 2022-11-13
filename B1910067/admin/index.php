<?php
session_start();
if (!isset($_SESSION['dangnhap'])) {
  header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Admin</title>

  <!-- Montserrat Font -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700&display=swap&subset=latin-ext,vietnamese" rel="stylesheet">

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  <link rel="stylesheet" href="../css/fontawesome-free-6.1.2-web/css/all.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/style_admin.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

</head>

<body style="background:url(../ig/bg8.png) ; ">
  <div class="grid-container">
    <?php
    include("config/config.php");
    include("modu/header.php");
    include("modu/menu.php");
    include("modu/main.php");
    // include("modu/footer.php");

    ?>
    <!-- </div> -->
  </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
<script src="./js/scripts.js"></script>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.ckeditor.com/4.20.0/full/ckeditor.js"></script>
<script>
  CKEDITOR.replace('tomtat');
  CKEDITOR.replace('noidung');
  // CKEDITOR.replace('tenbaiviet');
</script>

</html>