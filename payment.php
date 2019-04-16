<?php
session_start();
ob_start();
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

    <title>Online Admission System</title>
  </head>
  <body>
    <?php include 'inc/header.php'; ?>
      <section id="top-section" class="mb-5 bg-dark">
          <header class="container">
              <div class="row">
                  <div class="col-md-10 mx-auto">
                      <ul class="nav">
                          <li class="nav-item">
                              <a class="nav-link active" href="index.php">Personal Details</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="education.php">Education</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="image.php">Photograph</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="classday.php">Class Day</a>
                          </li>
                          <li class="nav-item activenav">
                              <a class="nav-link" href="payment.php">Payment</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </header>
      </section>
    <!-- Result -->
    <div class="container my-5">
      <div class="row">
        <div class="col-md-6 mt-2 text-center bg-secondary p-5">
<?php
    include 'lib/Database.php';
    $db = new Database();
     $table = "students";
     //$order = array('order_by' => 'id DESC' );
    $selectcon = array('select' => 'name,phone,email');
     $wherecon = array(
     	'where' =>array('id' => $_SESSION['lastId']),
     	'return_type' =>'single'
    );
    // $limit = array('start'=>'2', 'limit'=>'3');
    // $limit = array('limit'=>'3');

    $studentData = $db->readPaymentData($table,$selectcon,$wherecon);
    if(!empty($studentData)){
        echo "Name: ".$studentData['name']."<br/>";
        echo "Phone: ".$studentData['phone']."<br/>";
        echo "Email: ".$studentData['email']."<br/>";
    }


    $table = "image";
    //$order = array('order_by' => 'id DESC' );
    //$selectcon = array('select' => 'name,phone,email');
    $wherecon = array(
       'where' =>array('stdid' => $_SESSION['lastId']),
       'return_type' =>'single'
   );
   // $limit = array('start'=>'2', 'limit'=>'3');
   // $limit = array('limit'=>'3');

   $image = $db->readData($table,$wherecon);
   if(!empty($image)){
      // echo " <img src='$image['photo']'> ";
?>
<img src="<?php echo $image['photo']; ?>" height="200px" width = "200px" class="my-5">
<?php
    }
    // var_dump($studentData['phone']);
    echo "<h4> Unique ID: ".substr($studentData['phone'], 3,6)."</h4>"
?>
        <a href="admit.php" class="btn text-white bg-dark">Download Admit</a>
        </div>
        <div class="col-md-6 mt-2 text-center bg-light p-5">
            <p>Make payment of TK 1000 as application processing fee from your/agent’s ROCKET account number to PMIT, IIT-JU</p>
            <p>1. Dial*322#</p>
            <p>2. Select Payment</p>
            <p>3. Select Bill Pay</p>
            <p>4. Enter Bill ID(333)</p>
            <p>5. Enter your Mobile No.</p>
            <p>6. Enter Amount (1000tk)</p>
            <p>7. Enter PIN</p>
        </div>
      </div>
    </div>

    <?php include 'inc/footer.php'; ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
