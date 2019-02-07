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

          <!-- Button trigger modal -->
          <td><button type="button" class="btn btn-outline-success" data-toggle="modal" data-target=".bd-example-modal-xl">More</button></td>

          <!-- Modal -->
          <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title"><?php echo $data['title']; ?> Record# <?php echo $baptisms->b_id; ?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col">
                      <p>Child's Full Name: <br> <strong> <?php echo $baptisms->b_cname1 . ' ' . $baptisms->b_cname2 . ' ' . $baptisms->b_cname3; ?></strong></p>
                      <p>Date of Baptism / Christening: <br><strong> <?php
                      if($baptisms->b_baptized)
                        echo $baptisms->b_baptized;
                      else
                        echo $baptisms->b_christened; ?></strong></p>
                    </div>

                    <div class="col">
                      <p>Father's Name: <br> <strong> <?php echo $baptisms->b_fname1 . ' ' . $baptisms->b_fname2 . ' ' . $baptisms->b_fname3;  ?> </strong></p>
                      <p>Father's Occupation: <br> <strong> <?php echo $baptisms->b_foccupation; ?> </strong></p>
                    </div>

                    <div class="col-3">
                      <p>Mother's Name:  <br> <strong> <?php echo  $baptisms->b_mname1 . ' ' . $baptisms->b_mname2 . ' ' . $baptisms->b_mname3;  ?> </strong> </p>
                      <p>Mother's Occupation:<br> <strong> <?php
                      if($baptisms->b_moccupation)
                        echo  $baptisms->b_moccupation;
                      else echo 'n/a'?>  </strong></p>
                    </div>

                  </div>
                  <hr>
                  <div class="row">
                    <div class="col">
                      <p>Address: <br> <strong> <?php  echo $baptisms->b_add1 . ', ' . $baptisms->b_add2 . ',  ' .$baptisms->b_add3; ?> </strong> </p>
                    </div>

                    <div class="col">
                      <p>Editorial/Notes: <br> <strong> <?php
                      if($baptisms->b_editorial)
                        echo $baptisms->b_editorial;
                      else
                        echo 'n/a' ?></strong></p>
                    </div>
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
      </tr>
      <?php endforeach; ?>
    </table>
  </div>
  <div class="">

  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
