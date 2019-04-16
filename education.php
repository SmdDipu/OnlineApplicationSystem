<?php     session_start(); ?>
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
    <section id="top-section" class="mb-5 sticky-top bg-dark text-red">
        <header class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link active" href="index.php">Personal Details</a>
                        </li>
                        <li class="nav-item activenav">
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
    <secition id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <form action="" method="post">
                        <div class="form-row">
                            <div class="form-group col-md-5 mr-auto">
                                <div class="form-group row">
                                    <label for="mstatus" class="col-sm-2 col-form-label-sm">Degree</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <select class="form-control" name="degree" required>
                                                <option value="">..Please Select..</option>
                                                <option value="O-level">O-level</option>
                                                <option value="A-level">A-level</option>
                                                <option value="ssc">SSC</option>
                                                <option value="hsc">HSC</option>
                                                <option value="Graduation">Graduation</option>
                                                <option value="Post Graduation">Post Graduation</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-5 ml-auto">
                                <div class="form-group row">
                                    <label for="nationality" class="col-sm-3 col-form-label-sm">Group/Subject</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control col-form-label-sm" name="subject" placeholder="Group/Subject" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <div class="form-group row">
                                    <label for="nationality" class="col-sm-2 col-form-label-sm">Board/University</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control col-form-label-sm" name="board" placeholder="Board/university" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-5 mr-auto">
                                <div class="form-group row">
                                    <label for="nationality" class="col-sm-4 col-form-label-sm">Year Of Passing</label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control col-form-label-sm" name="yop" placeholder="Year of passing" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-5 ml-auto">
                                <div class="form-group row">
                                    <label for="nationality" class="col-sm-2 col-form-label-sm">GPA/Class</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control col-form-label-sm" name="cgpa" placeholder="CGPA" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="exampleFormControlFile1">Upload Scan Copy</label>
                            <input type="file" class="form-control-file" name="image">
                        </div>

                        <div class="form-group row mt-3">
                            <div class="col-sm-2 mx-auto">
                                <input class="btn btn-outline-primary" type="submit" name="next" value="Save">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </secition>


    <section id="result" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <table class="table table-striped">
                        <thead>
                            <tr class="table-primary">
                                <th scope="col">Degree</th>
                                <th scope="col">Group/Subject</th>
                                <th scope="col">Board/University</th>
                                <th scope="col">Year Of Passing</th>
                                <th scope="col">GPA/Class</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

<?php
    include 'lib/Database.php';
    $db = new Database();
    if(isset($_POST['next'])){
        $degree = $_POST['degree'];
        $subject = $_POST['subject'];
        $board = $_POST['board'];
        $yop = $_POST['yop'];
        $cgpa = $_POST['cgpa'];

        // echo $degree."<br/>";
        // echo $subject."<br/>";
        // echo $board."<br/>";
        // echo $yop."<br/>";
        // echo $cgpa."<br/>";
        $table = 'education';
        $studentData = array(
            'degree' => $_POST['degree'],
            'subject' => $_POST['subject'],
            'board' => $_POST['board'],
            'yop' => $_POST['yop'],
            'cgpa' => $_POST['cgpa'],
            'stdid' => $_SESSION['lastId']
        );
        //echo $studentData['stdid'];
        if($studentData['stdid'] == ''){
            echo "<h3 class='text-center'>First Fill The Personal Details</h3>";
            //session_destroy();
        }
        else{
            $insertStudent = $db->insertData($table,$studentData);
            if($insertStudent){
                // header('Location: .php');
                // echo "inserted</br>";
                 //session_destroy();
            }
            else{
                echo "Not Inserted";
            }
        }


        $table2 = "education";
        //$order = array('order_by' => 'id DESC' );
        $selectcon = array('select' => 'id,degree,subject,board,yop,cgpa,stdid');
        $wherecon = array(
            'where' =>array('stdid' =>$_SESSION['lastId']),
            //'return_type' =>'count'
        );
        // $limit = array('start'=>'2', 'limit'=>'3');
         //$limit = array('limit'=>'3');

        $educationData = $db->readPaymentData($table2,$selectcon,$wherecon);
        //var_dump($educationData);

        //echo $educationData;
        //echo $educationData['degree'];



        if(!empty($educationData)){
           foreach($educationData as $data){
               echo "
               <tr>
                   <td>$data[degree]</td>
                   <td>$data[subject]</td>
                   <td>$data[board]</td>
                   <td>$data[yop]</td>
                   <td>$data[cgpa]</td>
                   <td><a href='delete.php?del=$data[id]'><button class='btn btn-danger'>DELETE</button></a></td>
               </tr>";
           }
        }


    }
?>





<?php


?>

                            <!-- <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td><a href="#"><button class="btn btn-danger">DELETE</button></a></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td><a href="#"><button class="btn btn-danger">DELETE</button></a></td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <?php include 'inc/footer.php'; ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
