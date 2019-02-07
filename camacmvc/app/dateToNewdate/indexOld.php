<?php require APPROOT . '/views/inc/header.php'; ?>

        <?php require_once 'process.php'; ?>

        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-<?=$_SESSION['msg_type']?>">
                <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>
            </div>
        <?php endif ?>
        <div class="container">
        <?php
            $mysqli = new mysqli('localhost','root','','bodfaritimes') or die(mysqli_error($mysqli));
            /*$result = $mysqli->query("SELECT * FROM baptism WHERE b_id >5998 AND b_id <7000 AND b_newdate =0") or die($mysqli->error);

            $result = $mysqli->query("SELECT * FROM baptism WHERE b_newdate =0") or die($mysqli->error);
            */
            $result = $mysqli->query("SELECT * FROM baptism ORDER BY b_newdate") or die($mysqli->error);

            //pre_r($result);
            ?>

            <div class="row justify-content-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Old</th>
                            <th>New</th>
                            <th>Christened</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
            <?php
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['b_id']; ?></td>
                        <td><?php echo $row['b_baptized']; ?></td>
                        <td><?php echo $row['b_newdate']; ?></td>
                        <td><?php echo $row['b_christened']; ?></td>
                        <td>
                            <a href="index.php?edit=<?php echo $row['b_id']; ?>"
                               class="btn btn-info btn-sm">Edit</a>
                            <a href="process.php?delete=<?php echo $row['b_id']; ?>"
                               class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </table>
            </div>
            <?php

            function pre_r( $array ) {
                echo '<pre>';
                print_r($array);
                echo '</pre>';
            }
        ?>

        <div class="row justify-content-center">
        <form class="form-inline mr-5"  action="process.php" method="POST">
            <input type="hidden" name="b_id" value="<?php echo $b_id; ?>">
            <div class="form-group">
            <!--<label>Old</label>-->
            <input type="text" name="b_baptized" class="form-control mr-3"
                   value="<?php echo $b_baptized; ?>" placeholder="b_baptized date">
            </div>
            <div class="form-group">
            <!--<label>New</label>-->
            <input type="text" name="b_newdate"
                   value="<?php echo $b_newdate; ?>" class="form-control mr-3" placeholder="b_new date">
            </div>
            <div class="form-group">
            <!--<label>Editorial</label>-->
            <input type="text" name="b_christened"
                   value="<?php echo $b_christened; ?>" class="form-control mr-3" placeholder="b_christened date">
            </div>
            <div class="form-group">
            <?php
            if ($update == true):
            ?>
                <button type="submit" class="btn btn-info btn-sm mr-3" name="update">Update</button>
            <?php else: ?>
                <button type="submit" class="btn btn-primary btn-sm mr-3" name="save">Save</button>
            <?php endif; ?>
            </div>
                <button type="submit" class="btn btn-warning btn-sm mr-5" name="create-new">Create Newdates</button>
            </div>
        </form>
        </div>
        </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
