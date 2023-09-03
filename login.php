<?php
$conn = mysqli_connect("localhost","root","","icedatabase");
$firstname = mysqli_real_escape_string($conn, $_POST['FirstName']);
        $lastname = mysqli_real_escape_string($conn, $_POST['LastName']);
        $major = mysqli_real_escape_string($conn, $_POST['major']);
        $pass = mysqli_real_escape_string($conn, $_POST['password']);
$sql = 'SELECT * FROM `member_j`';
$data = mysqli_query($conn,$sql);
$users = mysqli_fetch_all($data, MYSQLI_ASSOC);

foreach($users as $user){
     if ($user['fname'] ===$firstname &&  $user['lname'] === $lastname && $user['password'] === $pass && $user['major'] === $major){
            header("Location: center.php");
        exit;
     }else{
        continue;
     }
}
mysqli_free_result($data);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="login">
    <div class="logbox">
        <div>
            <h3>commitee<br>member</h3>
        </div>
        <div class="ttu">
            <img src="ttuphoto.jpg">
        </div>
        <div class="member">
            <form action="login.php" method="POST">
            <lable class="abood">fname</lable>
                <input type="text" name="FirstName" id="FirstName">
            <lable class="abood">lname</lable><input type="text" name="LastName" id="LastName">
            <lable class="abood">Major </lable><input type="text" name="major" id="major" class="major">
            <lable class='abood'>pass</lable><input type="password" name="password" id="password">
            <input type="submit" name="submit" value="Submit" class='submit'>
            
            </form>
        </div>
    </div>

</body>
</html>
