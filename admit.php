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
    <link rel="stylesheet" href="font-awesome/css/fontawesome-all.min.css">

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
    <!-- Admit -->
<?php
    include 'lib/Database.php';
    $db = new Database();
     $table = "students";
     //$order = array('order_by' => 'id DESC' );
    $selectcon = array('select' => 'phone');
     $wherecon = array(
     	'where' =>array('id' => $_SESSION['lastId']),
     	'return_type' =>'single'
    );
    // $limit = array('start'=>'2', 'limit'=>'3');
    // $limit = array('limit'=>'3');

    $studentData = $db->readPaymentData($table,$selectcon,$wherecon);
    if(!empty($studentData)){
        //echo "Phone: ".$studentData['phone']."<br/>";
    }

    $phone = $studentData['phone'];
    $tid = substr($studentData['phone'], 3,6);
    // echo $tid;
?>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mt-2 text-center mx-auto  p-5">
            <form class="" action="" method="post">
                <div class="form-group">
                    <label for="tid">Insert Your Unique ID</label>
                    <input type="text" class="form-control" id="tid" name="tid" placeholder="Transaction ID">
                </div>
                <div class="form-group">
                    <label for="phone">Insert Your Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                </div>
                <input class="btn btn-outline-primary" type="submit" name="admit" value="Download Admit Card">
            </form>
        </div>
      </div>
    </div>
<?php
    if(isset($_POST['admit'])){
        $transId = $_POST['tid'];
        $usrphone = $_POST['phone'];
        if($transId === $tid && $usrphone===$phone){
            header('Location:pdf.php');
        }
        else{
            echo "<center>ID not matched</center>";
        }
    }
?>
 <?php include 'inc/footer.php'; ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
