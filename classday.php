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
    <section id="" class="mb-5 sticky-top bg-dark">
        <header class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Personal Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="education.php">Education</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="image.php">Photograph</a>
                        </li>
                        <li class="nav-item activenav">
                            <a class="nav-link" href="classday.php">Class Day</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
    </section>
    <header class="main-header"></header>
    <section id="class-day" class="mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <form action="" method="post">
              <fieldset class="fldset">
                <legend class="lgnd">Choose Your Preffered Class Day:</legend>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="classday" id="exampleRadios1" value="friday" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Friday
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="classday" id="exampleRadios2" value="saturday">
                <label class="form-check-label" for="exampleRadios2">
                  Saturday
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="classday" id="exampleRadios3" value="both">
                <label class="form-check-label" for="exampleRadios3">
                  Any
                </label>
              </div>
            </fieldset>
              <div class="ml-auto nxt-btn mt-3">
                <input class="btn btn-primary nxt-btn" type="submit" name="submit" value="Submit">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

<?php
    include 'lib/Database.php';
    $db = new Database();
    if(isset($_POST['submit'])){
      $table = 'day';
      $studentData = array(
          'choseday' => $_POST['classday'],
          'stdid' => $_SESSION['lastId']
      );

      $insertStudent = $db->insertData($table,$studentData);
      if($insertStudent){
          header('Location: payment.php');
          //echo "inseted";
      }
      else{
          echo "Not Inserted";
      }
  }
ob_end_flush();
?>



    <?php include 'inc/footer.php'; ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
