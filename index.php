<html>
<?php
include "db.php";

if(isset($_POST['submit'])){

    $uname = mysqli_real_escape_string($conn,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($conn,$_POST['txt_pwd']);

        $sql_query = "select * from users where username='$uname' and password='$password'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_assoc($result);

        if($count > 0){
            $_SESSION['uname'] = $row['uname'];
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }


}

<html>
<head>
</head>

<body>
    <h1>Log-in</h1><br></br>
    <label>Username</label>
    <input type = "text" name = "User">
    <label>Password</label>
    <input type = "password" name = "Password">
    <button type = "button" name = "Submit">Log-in</button>
</body>

</html>
