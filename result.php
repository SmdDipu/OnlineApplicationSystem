<?php
  // database connection
  $server = 'localhost';
  $user ='root';
  $pass = '';

  $connect = mysqli_connect($server,$user,$pass);
  mysqli_select_db($connect,"ads");

  if(isset($_POST['submit'])){
    $day = $_POST['classday'];
    session_start();
    $name = $_SESSION['name'];
    $roll = $_SESSION['roll'];
    $merit = $_SESSION['merit'];
    $gender = $_SESSION['gender'];
    $phone = $_SESSION['phone'];
    $email = $_SESSION['email'];

    // echo $day;
    // echo $name;
    // echo $roll;
    // echo $merit;
    // echo $gender;
    // echo $phone;
    // echo $email;
    // echo $day;
    $insert = "INSERT INTO students(name,roll,merit,gender,phone,email,classday) VALUES('$name','$roll','$merit','$gender','$phone','$email','$day')";
    $result = $connect -> query($insert);
  }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>learn bootstrap 4</title>
  </head>
  <body>
    <!-- Result -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 mt-2 text-center">
          <h1>Friday List</h1>
            <ol>
<?php
// database connection
$server = 'localhost';
$user ='root';
$pass = '';

$connect = mysqli_connect($server,$user,$pass);
mysqli_select_db($connect,"ads");

$read = " SELECT name FROM students WHERE classday='friday' ORDER BY merit DESC ";
$retrieve = $connect->query($read);

while($row = mysqli_fetch_array($retrieve)){
?>

            <li><?php echo $row['name']; ?></li>

<?php } ?>
          </ol>
        </div>
        <div class="col-md-6 mt-2 text-center">
          <h1>Saturday List</h1>
          <ol>
<?php
  // database connection
  $server = 'localhost';
  $user ='root';
  $pass = '';

  $connect = mysqli_connect($server,$user,$pass);
  mysqli_select_db($connect,"ads");

  $read = " SELECT name FROM students WHERE classday='saturday' ORDER BY merit DESC ";
  $retrieve = $connect->query($read);

  while($row = mysqli_fetch_array($retrieve)){
?>
            <li><?php echo $row['name']; ?></li>
<?php } ?>
          </ol>
        </div>
      </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
