<?php
    $conn = mysqli_connect("localhost","root","","icedatabase");
        if (isset($_POST["submit"])) {
            $firstname = mysqli_real_escape_string($conn, $_POST['FirstName']);
            $lastname = mysqli_real_escape_string($conn, $_POST['LastName']);
            $major = mysqli_real_escape_string($conn, $_POST['major']);
            $pass = mysqli_real_escape_string($conn, $_POST['password']);

        
            $sql = "INSERT INTO member_j (`fname`, `lname`, `major`, `password`) 
            VALUES ('$firstname', '$lastname', '$major', '$pass')";
            if(empty($firstname)){
                echo 'first name empty';
            }elseif(empty($lastname)){
                echo 'last name empty';
            }elseif(empty($major)){
                echo 'major is empty';
            }elseif(empty($pass)){
                echo 'pass is empty';
            }else{
                if(mysqli_query($conn,$sql)){
                    header('Location: index.php');
            
            }
            }
        }
    
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICE COMMUNTIE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<header>

    <a href="http://www.ttu.edu.jo/"><img src="ttuphoto.jpg" class="logo"></a>
    <img src="user_1077063.png" class="memberphoto">
    <nav class="navigation">
    <input type="checkbox" id="check">
        <label for="check" class="check">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a href="search.php">search</a></li>
            <li><a href="adminmember.php">حذف عضو</a></li>
            <li><a href="joinad.php">إضافة عضو</a></li>
            <li><a href="enterad.php">الصفحة الرئيسة</a></li>
        </ul>
    </nav>
</header>
<br><br><br><br><br><br><br>
    <div class="logbox">
        <h3>إضافة عضو</h3>
        <form action="index.php" method="POST">
        <div class="member">
        <lable class="abood">fname : </lable><input type="text" name="FirstName" id="FirstName">
            <lable class="abood">lname : </lable><input type="text" name="LastName" id="LastName">
            <lable class="abood">major : </lable><input type="text" name="major" id="major">
            <lable class='abood'>pass : </lable><input type="text" name="password" id="password">
            <input type="submit" name="submit" value="Submit" class='submit'>
        </div>  
        </form>
    </div>