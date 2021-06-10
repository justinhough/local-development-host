<?php require_once('config.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $_ENV['LOCAL_DEV_NAME'] ?></title>

  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
  <link rel="stylesheet" href="./assets/local-dev.css">

</head>
<body>
  <div class="page-wrapper">

    <?php require_once('components/header.php'); ?>
    <!-- // end of header -->

    <div class="container pt-2 pb-2">

      <?php require_once('components/sites.php'); ?>
      <!-- // end of sites -->

    </div>
    
  </div>

  <?php require_once('components/footer.php'); ?>
  <!-- // end of footer -->


  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  <script src="./assets/local-dev.js" charset="utf-8"></script>

</body>
</html>
