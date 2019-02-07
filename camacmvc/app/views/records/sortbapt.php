<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <h4>There are <?php echo count($data['baptism']) ?> Baptism records found the name of <?php echo ($data['firstname'].' '.$data['surname']) ?>. </h4>
    <br>
    <br>
  </div>
  <div class="row justify-content center">
    <table class="table table-hover table-sm">
      <thead>
          <tr>
              <th>ID</th>
              <th>Date</th>
              <th>Child's name</th>
              <th>Father's name</th>
              <th>Action</th>
          </tr>
      </thead>
      <?php foreach($data['baptism'] as $baptisms) : ?>
      <tr>
          <td><?php echo $baptisms->b_id; ?> </td>
          <td><?php
             if($baptisms->b_baptized)
               echo $baptisms->b_baptized;
            else
               echo $baptisms->b_christened;
            ?></td>
          <td><?php echo $baptisms->b_cname1.' '. $baptisms->b_cname2.' '. $baptisms->b_cname3; ?></td>
          <td><?php echo $baptisms->b_fname1.' '. $baptisms->b_fname2.' '. $baptisms->b_fname3; ?></td>
          <td>
            <a href="<?php echo URLROOT; ?>/records/show/<?php echo $baptisms->b_id; ?>" class="btn btn-sm btn-outline-success">More</a>
          </td>
      </tr>
      <?php endforeach; ?>
    </table>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
