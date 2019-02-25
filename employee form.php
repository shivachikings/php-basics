<?php
if (isset($_POST["dob"])) {
    extract($_POST);
//connect
    $conn = mysqli_connect("localhost", "root", "", "shule");
    $sql = "INSERT INTO `employees`(`id`, `names`, `email`, `address`, `dob`, `department`, `gender`, `kra_pin`, `salary`) VALUES 
                            (NULL ,'$names','$email','$address','$dob','$department','$gender','$kra_pin','$salary')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $message = " $names has been employed ";
}




?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>employee</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <script src="bootstrap-4.2/js/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<?php
require'nav bar.php';
?>

<div class="container bg-secondary">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <h3>add employees' details</h3>
            <p class="text-success">

                <?php
                if (isset($message))
                    echo $message;
                ?>
            </p>
            <form action="employee%20form.php" method="post">

                <div class="form-group">
                    <input type="text" required class="form-control" name="names" placeholder="names">
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <input type="email" required class="form-control" name="email" placeholder="email">
                    </div>
                    <input type="text" required class="form-control" name="address" placeholder="address">
                </div>

                <div class="form-group">
                    <input type="date" class="form-control" name="dob" placeholder="date of birth">
                </div>
                <div class="form-group">
                    <select name="department" class="form-control">
                        <option value="economiscs">economics</option>
                        <option value="statistics">statistics</option>
                        <option value="engineering">engineering</option>
                        <option value="financial advice">financial advice</option>
                        <option value="accounting">accounting</option>
                    </select>
                </div>

                <div class="radio">
                    <label><input type="radio" checked value="Male" name="gender"> Male</label>
                </div>
                <div class="radio">
                    <label><input type="radio" value="Female" name="gender"> Female</label>
                </div>

                <div class="form-group">
                    <input type="number" class="form-control" name="kra_pin" placeholder="kra_pin">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="salary" placeholder="salary">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>

    </div>
</div>


</body>
</html>