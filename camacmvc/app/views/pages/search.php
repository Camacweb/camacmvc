<?php require APPROOT . '/views/inc/header.php'; ?>
  <h1><?php echo $data['title']; ?></h1>
  <h4><?php echo $data['sub-title']; ?></h4>
  <br>
  <p><?php echo $data['description']; ?></p>
  <h3><?php echo $data['subhead']; ?></h3>
  <p><?php echo $data['subpara']; ?></p>
  <h4><?php echo $data['footer']; ?></h4>
  <p><?php echo $data['last']; ?></p>
  <p>Version: <strong><?php echo APPVERSION; ?></strong></p>
<?php require APPROOT . '/views/inc/footer.php'; ?>
