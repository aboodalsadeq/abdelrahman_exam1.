<?php
    $conn = mysqli_connect("localhost","root","","icedatabase");
        if (isset($_POST["submit"])) {
            $firstname = mysqli_real_escape_string($conn, $_POST['rname']);
            $lastname = mysqli_real_escape_string($conn, $_POST['number']);
            $major = mysqli_real_escape_string($conn, $_POST['day']);
            $pass = mysqli_real_escape_string($conn, $_POST['time']);

        
            $sql = "INSERT INTO suggestions (`rname`, `number`, `day`, `time`) 
            VALUES ('$firstname', '$lastname', '$major', '$pass')";
            if(empty($firstname)){
                echo 'name is empty';
            }elseif(empty($lastname)){
                echo 'number is empty';
            }elseif(empty($major)){
                echo 'day is empty';
            }elseif(empty($pass)){
                echo 'time is empty';
            }else{
                if(mysqli_query($conn,$sql)){
                    header('Location: index.html');
            
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
    <div class="box"><a href="login.php" class="color">Committee member</a></div>
    <nav class="navigation">
    <input type="checkbox" id="check">
        <label for="check" class="check">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a href="search.php">search</a></li>
            <li><a href="contact.html">للتواصل معنا </a></li>
            <li><a href="index.php">طريقة الأنضمام</a></li>
            <li><a href="index.html">الصفحة الرئيسة</a></li>
            <li><a href="loginad.php">admin</a></li>
        </ul>
    </nav>
</header>
<section>


<div class="suggbox">
        <h3>أقترح هنا</h3>
        <form action="sugg.php" method="POST">
        <div class="member">
            <lable class="abood">name</lable><input type="text" name="rname" id="rname">
            <lable class="abood">num</lable><input type="number" name="number" id="number">
            <lable class="abood">day </lable><input type="text" name="day" id="day">
            <br>
            <lable class='abood'>h : </lable><input type="time" name="time" id="time">
            <input type="submit" name="submit" value="Submit" class='submit'>
        </div>  
        </form>
    </div>
</section>