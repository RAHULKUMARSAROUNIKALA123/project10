<?php
 
$con=mysqli_connect('localhost', 'root');
if($con){
?>
    <script>
    alert('Connection success');
    </script>
<?php
}
else{
?>
    <script>
    alert('Data not saved Properly');
    </script>
<?php
}

mysqli_select_db($con, 'tutorial1');
$Fullname = $_POST['fname'];
$Brollno = $_POST['bnumber'];
$Branch = $_POST['branch'];
$number = $_POST['mnumber'];
$email = $_POST['user'];
$pass = $_POST['password'];

$q ="select *from data where email = '$email' && password ='$pass'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "duplicate date ";
    echo "register again";
    ?>
    <html>
    <a href="login.php">Register</a>
    </html>
    <?php
}
else{
    $qy = "insert into data(name , rollno , branch , mnumber , email , password) values ('$Fullname' , '$Brollno'
    , '$Branch' , '$number' , '$email' , '$pass')";
    mysqli_query($con, $qy);
    ?>
    <html>
        <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                    <a href="login.php" class="btn btn-primary" style="align:center;">Login</a>
                    </div>
                </div>
            </div>
        </body>
    </html>
    <?php
}






?>