<?php require APPROOT . '/views/inc/header.php'; ?>
  <h2> <?php echo $data['title']; ?> </h2>
  <h5>Hints for getting to the right individual baptism record.</h5>
  <div class="container">
    <?php
    $total = $data['baptism'];
    $surname = '';
    ?>
    <div class="row ">
      <p>To assist your research it will help if you know the name, especially the Surname of the individual you are looking for, as this will greatly reduce the number of records you will have to scroll through. Clicking on the search button without entering a surname will give you with all of our database records to view, as an example there are: <strong> <?php echo count($total); ?> baptism and christening records.</strong></p>
      <p>Try searching for their surname only in the first instance as this may return an acceptable group of records to review.  Remember people in Wales are frequently known by their middle name rather than their first name, so only input their first name if you are sure.</p>
      <p>Having decided who you wish to search for, now click "Search Baptism Records."</p>
    <hr>
    </div>
  </div>
  <div class="">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Search Baptisms</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">6862 records</h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Dates: 1571 through 2008</li>
            <li>75% have fathers name inc'd</li>
            <li>55% have local address inc'd</li>
            <li>all Christenings inc'd</li>
          </ul>
          <form action="<?php echo URLROOT; ?>/records/sortbapt" method="post">
            <div class="form-group">
              <strong><label for="surname">Enter Name/s below</label></strong>
              <input type="text" name="surname" class="form-control form-control-lg" placeholder="Enter Surname">
            </div>
            <div class="form-group">
              <input type="text" name="firstname" class="form-control form-control-lg" placeholder="Enter First name">
            </div>
          <input type="submit" class="btn btn-outline-success btn-block" value="Submit">
          </form>
        </div>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Marriages</h4>
        </div>
        <form class="" action="records/sortedbaptism" method="post">
          <div class="card-body">
            <h1 class="card-title pricing-card-title">2534 records</h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Dates: 1571 through 2008</li>
              <li>75% have fathers name inc'd</li>
              <li>55% have local address inc'd</li>
              <li>all marriages inc'd</li>
            </ul>
            <a href="<?php echo URLROOT; ?>/records/sortedbaptisms/ <?php echo $b_cname3; ?>" type="text" class="btn btn-lg btn-block btn-outline-success" method="post">Search Marriages</a>
          </div>
        </form>
      </div>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Burials</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">6862 records</h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Dates: 1571 through 2011</li>
            <li>??% have fathers name inc'd</li>
            <li>??% have local address inc'd</li>
            <li>all Funerals inc'd</li>
          </ul>
          <form action="<?php echo URLROOT; ?>/records/sortburr" method="post">
            <div class="form-group">
              <label for="title">Search by Surname: <sup>*</sup></label>
              <input type="text" name="surname" class="form-control form-control-lg" placeholder="Enter Surname">
            </div>
          <button type="button" class="btn btn-lg btn-block btn-outline-success">Search Burials</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
