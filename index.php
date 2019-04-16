<?php ob_start(); ?>
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
    <section id="top-section" class="mb-5 sticky-top bg-dark "> <!-- sticky-top -->
        <header class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <ul class="nav">
                        <li class="nav-item activenav">
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
                    </ul>
                </div>
            </div>
        </header>
    </section>
    <secition id="content" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <form action="index.php" method="post">
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label-sm">Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control col-form-label-sm" id="name" name="name" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-2 col-form-label-sm">Father's Name</label>
                            <div class="col-sm-10">
                              <input type="test" class="form-control col-form-label-sm" id="fname" name="fname" placeholder="Father's Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mname" class="col-sm-2 col-form-label-sm">Mother's Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control col-form-label-sm" id="mname" name="mname" placeholder="Mother's Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-sm-2 col-form-label-sm">Gender</label>
                            <div class="col-sm-10 col-form-label">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mstatus" class="col-sm-2 col-form-label-sm">Marital Status</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <select class="form-control" name="mstatus" required>
                                        <option value="">..Please Select..</option>
                                        <option value="married">Married</option>
                                        <option value="unmarried">Unmarried</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mstatus" class="col-sm-2 col-form-label-sm">Blood Group</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <select class="form-control" name="bgroup" required>
                                        <option value="">..Please Select..</option>
                                        <option value="a+">A+</option>
                                        <option value="a-">A-</option>
                                        <option value="b+">B+</option>
                                        <option value="b-">B-</option>
                                        <option value="ab+">AB+</option>
                                        <option value="ab-">AB-</option>
                                        <option value="o+">O+</option>
                                        <option value="o-">O-</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mstatus" class="col-sm-2 col-form-label-sm">Religion</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <select class="form-control" name="religion" required>
                                        <option value="">..Please Select..</option>
                                        <option value="islam">Islam</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="christian">Christian</option>
                                        <option value="bhuddist">Bhuddist</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nationality" class="col-sm-2 col-form-label-sm">Nationality</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control col-form-label-sm" id="nationality" name="nationality" placeholder="Nationality" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nid" class="col-sm-2 col-form-label-sm">National ID</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control col-form-label-sm" id="nid" name="nid" placeholder="National ID" required>
                            </div>
                        </div>

                        <fieldset class="fldset m-5">
                          <legend class="lgnd">Contact Details</legend>

                          <div class="form-group row">
                            <label for="phone" class="col-sm-4 col-form-label-sm">Mobile</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control col-form-label-sm" id="phone" name="phone" placeholder="Mobile" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label-sm">Email</label>
                            <div class="col-sm-8">
                              <input type="email" class="form-control col-form-label-sm" id="email" name="email" placeholder="Email" required>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="peraddress" class="col-sm-4 col-form-label-sm">Permanent Address</label>
                            <div class="col-sm-8">
                                <textarea class="form-control col-form-label-sm" id="paddress" name="peraddress" rows="3" required></textarea>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="preaddress" class="col-sm-4 col-form-label-sm">Present Address</label>
                            <div class="col-sm-8">
                                <textarea class="form-control col-form-label-sm" id="preaddress" name="preaddress" rows="3" required></textarea>
                            </div>
                          </div>
                        </fieldset>
                        <div class="form-group row btn-margin">
                            <div class="col-sm-2 mx-auto">
                                <input class="btn btn-outline-primary" type="submit" name="next" value="Update Information">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </secition>
<?php
    include 'lib/Database.php';
    $db = new Database();
    if(isset($_POST['next'])){
        // $name = $_POST['name'];
        // $fname = $_POST['fname'];
        // $mname = $_POST['mname'];
        // $gender = $_POST['gender'];
        // $mstatus = $_POST['mstatus'];
        // $bgroup = $_POST['bgroup'];
        // $nationality = $_POST['nationality'];
        // $nid = $_POST['nid'];
        // $phone = $_POST['phone'];
        // $email = $_POST['email'];
        // $peraddress = $_POST['peraddress'];
        // $preaddress = $_POST['preaddress'];
        //
        // echo $name."<br/>";
        // echo $fname."<br/>";
        // echo $mname."<br/>";
        // echo $gender."<br/>";
        // echo $mstatus."<br/>";
        // echo $bgroup."<br/>";
        // echo $nationality."<br/>";
        // echo $nid."<br/>";
        // echo $phone."<br/>";
        // echo $email."<br/>";
        // echo $peraddress."<br/>";
        // echo $preaddress."<br/>";
        $table = 'students';
        $studentData = array(
            'name' => $_POST['name'],
            'fname' => $_POST['fname'],
            'mname' => $_POST['mname'],
            'gender' => $_POST['gender'],
            'mstatus' => $_POST['mstatus'],
            'bgroup' => $_POST['bgroup'],
            'nationality' => $_POST['nationality'],
            'nid' => $_POST['nid'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'peraddress' => $_POST['peraddress'],
            'preaddress' => $_POST['preaddress']
        );

        // $ln = strlen($_POST['phone']);
        // echo $ln;

        if(strlen($_POST['phone']) <11){
            //echo "<h3> Mobile Number Should be 11 digit</h3>";
            echo "<script>alert('Mobile number should be 11 digit')</script>";
            exit();
        }
        else{
            $insertStudent = $db->insertData($table,$studentData);
            session_start();
            $_SESSION['lastId'] = $insertStudent;

            if($insertStudent){
                header('Location: education.php');
            }
            else{
                echo "Not Inserted";
            }
            ob_end_flush();
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
