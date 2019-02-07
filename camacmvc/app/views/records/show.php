<?php require APPROOT . '/views/inc/header.php'; ?>
<a href="<?php echo URLROOT; ?>/records" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
<br>
<h3><?php echo $data['title']; ?></h3>
<h4><?php echo $data['subtitle'] . ' - ID#' . $data['baptism']->b_id; ?>  </h4>
<hr>
<div class="container">
  <div class="row">
    <div class="col-sm">
      <p>Child's Full Name: <br> <strong> <?php echo $data['baptism']->b_cname1 . ' ' . $data['baptism']->b_cname2 . ' ' . $data['baptism']->b_cname3; ?></strong></p>
      <p>Date of Baptism / Christening: <br><strong> <?php
      if($data['baptism']->b_baptized)
        echo $data['baptism']->b_baptized;
      else
        echo $data['baptism']->b_christened; ?></strong></p>

    </div>
    <div class="col-sm">
      <p>Father's Name: <br> <strong> <?php echo $data['baptism']->b_fname1 . ' ' . $data['baptism']->b_fname2 . ' ' . $data['baptism']->b_fname3;  ?> </strong></p>

      <p>Father's Occupation: <br> <strong> <?php echo $data['baptism']->b_foccupation; ?> </strong></p>
    </div>
    <div class="col-3">
      <p>Mother's Name:  <br> <strong> <?php echo  $data['baptism']->b_mname1 . ' ' . $data['baptism']->b_mname2 . ' ' . $data['baptism']->b_mname3;  ?> </strong> </p>

      <p>Mother's Occupation:<br> <strong> <?php
      if($data['baptism']->b_moccupation)
        echo  $data['baptism']->b_moccupation;
      else echo 'n/a'?>  </strong></p>
    </div>
  </div>
</div>
<hr>
<div class="container">
  <div class="row justify-content-around">
    <div class="col-sm">
      <p>Address: <br> <strong> <?php  echo $data['baptism']->b_add1 . ', ' . $data['baptism']->b_add2 . ',  ' .$data['baptism']->b_add3; ?> </strong> </p>
    </div>
    <div class="col-sm">
      <p>Editorial/Notes: <br> <strong> <?php
      if($data['baptism']->b_editorial)
        echo $data['baptism']->b_editorial;
      else
        echo 'n/a' ?></strong></p></strong></p>
    </div>
  </div>
</div>
<hr>

<?php require APPROOT . '/views/inc/footer.php'; ?>
