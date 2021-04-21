<?php 
/*include_once('config.php');
$query="SELECT * from cse417";
$result=mysqli_query($conn,$query);*/
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">
        <div class="form-group col-12 p-0">
            <form action="" method="POST">
                <div class="form-group">
                    <div class="col-sm-12">
                        <h2 style="text-align:center;color:blue">Student Details</h2>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Student Name</label>
                        <input type="text" name="studname" class="form-control " id="studname" placeholder="Student Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Course</label>
                        <input type="text" name="course" class="form-control " id="course" placeholder="Course">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Fee</label>
                        <input type="text" name="fee" class="form-control " id="fee" placeholder="Fee">
                    </div>

                    <div class="form-group col-md-6" align="center">
                        <button class="btn btn-success" style="width:80px">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<br>
    <button type="button" class="btn btn-primary btn-lg btn-block "><a href="logout.php"><p   class="text-dark mt-2 font-weight-bold">LOGOUT</p></a> </button>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>