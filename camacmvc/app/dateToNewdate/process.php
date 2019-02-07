<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'datetest') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$b_baptized = '';
$b_newdate = '';
$b_christened = '';

/*$result = $mysqli->query("SELECT * FROM baptism WHERE b_id >5999 AND b_id <7000 AND b_newdate =0") or die($mysqli->error);

$result = $mysqli->query("SELECT * FROM baptism WHERE b_id >5999 AND b_id <7000") or die($mysqli->error);
*/
$result = $mysqli->query("SELECT * FROM baptism ORDER BY b_newdate") or die($mysqli->error);

if (isset($_POST['save'])){
    $b_baptized = $_POST['b_baptized'];
    $b_newdate = $_POST['b_newdate'];
    $b_christened = $_POST['b_christened'];

    $mysqli->query("INSERT INTO baptism (b_baptized, b_newdate, b_christened) VALUES('$b_baptized', '$b_newdate', '$b_christened')") or
            die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: index.php");

}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM baptism WHERE b_id=$b_id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: index.php");
}

if (isset($_GET['edit'])){
    $b_id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM baptism WHERE b_id=$b_id") or die($mysqli->error());

     if (($result->num_rows)==1) {
      $row = $result->fetch_array();
      $b_baptized = $row['b_baptized'];
      $b_newdate = $row['b_newdate'];
      $b_christened = $row['b_christened'];
      //print_r($row); die();
    }
}

if (isset($_POST['update'])){
    $b_id = $_POST['b_id'];
    $b_baptized = $_POST['b_baptized'];
    $b_newdate = $_POST['b_newdate'];
    $b_christened = $_POST['b_christened'];

    //print_r($_POST); die();

    $mysqli->query("UPDATE baptism SET b_baptized='$b_baptized', b_newdate='$b_newdate', b_christened='$b_christened' WHERE b_id=$b_id") or
            die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header('location: index.php');
}

if (isset($_POST['create-new'])){

    while ($row = $result->fetch_assoc()):
     $b_id = $row['b_id'];
     $b_baptized = $row['b_baptized'];
     $b_christened = $row['b_christened'];

     if (!$b_baptized) {
       $date = $b_christened; //dd/mm/yy
       $dd=substr($date, 0, 2);
       $mm=substr($date, 3, 2);
       $yy=substr($date, 6, 4);
       $b_newdate = $yy. $mm. $dd;
     }else {
       $date = $b_baptized; //dd/mm/yy
       $dd=substr($date, 0, 2);
       $mm=substr($date, 3, 2);
       $yy=substr($date, 6, 4);
       $b_newdate = $yy. $mm. $dd;
     }

     $mysqli->query("UPDATE baptism SET b_newdate='$b_newdate' WHERE b_id=$b_id") or
             die($mysqli->error);
     endwhile;

    $_SESSION['message'] = "All Records have been updated!";
    $_SESSION['msg_type'] = "warning";

    header('location: index.php');
}
