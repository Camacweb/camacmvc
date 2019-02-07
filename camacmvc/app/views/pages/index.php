<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="jumbotron jumbotron-flud text-center">
    <div class="container">
    <h1 class="display-3"><?php echo $data['title']; ?></h1>
    <h5 class="display-6"><?php echo $data['sub-title']; ?></h5>
    </div>
  </div>
  <div class="container">
    <p class=""><?php echo $data['description']; ?></p>
    <h5> <?php echo $data['footer']; ?> </h5>
    <p class=""><?php echo $data['last']; ?></p>
    <p>Version: <strong><?php echo APPVERSION; ?></strong></p>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
