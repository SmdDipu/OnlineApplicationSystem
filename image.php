<?php
    ob_start();
    session_start();
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
    <section id="top-section" class="mb-5 sticky-top bg-dark">
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
                        <li class="nav-item activenav">
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
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Photo</label>
                            <input type="file" class="form-control-file" name="image">
                        </div>
                        <input class="btn btn-outline-primary" type="submit" name="next" value="Upload">
                    </form>
                </div>
            </div>
        </div>
    </secition>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $permitted = array('jpg','jpeg','png','gif' );
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_temp = $_FILES['image']['tmp_name'];

        //create unique name for uplaoded image
        $div = explode(".", $file_name);
        $get_file_ext = end($div);
        $set_file_ext = strtolower($get_file_ext);
        $unique_image_name = substr(md5(time()),0,10).'.'.$set_file_ext;
        $uploaded_image = "uploads/".$unique_image_name;
        //$folder ="uploads/";

        //validation
        if(empty($file_name)){
            echo "<span style='color:red;font-size:18px;'>Please select any image<br/></span>";
        }
        else if($file_size>1048576){
            echo "<span style='color:red;font-size:18px;'>Image size should be less than 1MB<br/></span>";
        }
        else if(in_array($set_file_ext, $permitted) === false){
            echo "<span style='color:red;font-size:18px;'>You can upload only:".implode(', ', $permitted)."</span>";
        }
        else{
            move_uploaded_file($file_temp,$uploaded_image);

            include 'lib/Database.php';
            $db = new Database();
            $table = 'image';

            $imageData = array(
                'photo' => $uploaded_image,
                'stdid' => $_SESSION['lastId']
            );

            $upload = $db->insertData($table,$imageData);

            if($upload){
                // echo "<span style='color:green;font-size:18px;'>Image uploaded Successfully<br/></span>";
                header('Location: classday.php');
            }
            else{
                echo "<span style='color:red;'>Image upload Failed!<br/></span>";
            }
        }
    }
ob_end_flush();
?>
    <secition id="content" class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto mt-5">
                    <img src="img/img.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </secition>



    <?php include 'inc/footer.php'; ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
