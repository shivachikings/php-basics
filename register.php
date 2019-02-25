<?php
if (isset($_POST["dob"])) {
    extract($_POST);
    echo "$names";
    //connect
    $scholarship = isset($scholarship) ? "Yes" : "No";
    $conn = mysqli_connect("localhost", "root", "", "shule");
    $sql = "INSERT INTO `students`(`id`, `names`, `email`, `gender`, `scholarship`, `dob`, `course`, `school_id`) VALUES 
(NULL ,'$names','$email','$gender','$scholarship','$dob','$course','$school_id')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $message = "student $names has been regustered";

}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <h3>employee registration</h3>
            <p class="text-success">

                <?php
                if (isset($message))
                    echo $message;
                ?>
            </p>
            <form action="register.php" method="post">
                <!--                names,email,gender,course,dob,scholarship,school_id-->

                <div class="form-group">
                    <input type="text" required class="form-control" name="names" placeholder="names">
                </div>

                <div class="form-group">
                    <input type="email" required class="form-control" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <input type="text" required class="form-control" name="address" placeholder="address">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="dob" placeholder="date of birth">
                </div>
                <div class="radio">
                    <label><input type="radio" checked value="Male" name="gender"> Male</label>
                </div>
                <div class="radio">
                    <label><input type="radio" value="Female" name="gender"> Female</label>
                </div>
                <div class="form-group">
                    <select name="course" class="form-control">
                        <option value="medicine">medicine</option>
                        <option value="economics and statistics">economic and statistics</option>
                        <option value="civil engineering">civil engineering</option>
                        <option value="financial engineering">financial engineering</option>
                        <option value="computer science">computer science</option>
                    </select>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="scholarship" value="yes" type="checkbox"> scholarship?
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>

        </div>

    </div>
</div>


</body>
</html>