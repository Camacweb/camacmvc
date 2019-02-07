<?php require APPROOT . '/views/inc/header.php'; ?>
  <h1><?php echo $data['title']; ?></h1>
  <h4><?php echo $data['sub-title']; ?></h4>
  <br>
  <p><?php echo $data['description']; ?></p>
  <h5><?php echo $data['footer']; ?></h5>
  <p>Version: <strong><?php echo APPVERSION; ?></strong></p>
  <?php require APPROOT . '/views/inc/footer.php'; ?>
