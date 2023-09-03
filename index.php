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
<section class="center">
    <div>
        <div class="join">
            <p>طريقة الأنضمام </p>
        </div>
        <pre>
        : يوجد لدينا ثلاث أقسام في اللجنة هي
            
القسم الأكاديمي : هو القسم الذي يهتم بجميع
                امور الملخصات والفيديوهات

    قسم الأنشطة : هو القسم المختص بجميع
        ورشات اللجنة والأنشطة العامة 
            
القسم الأعلامي : هو القسم المسؤول عن مواقع 
                        التواصل الأجتماعي 
                    
        </pre>
        <div>
            <img src="help_2597085.png" class="help">
        </div>
    </div>

</section>
<section>
    <div class="memberbox">
        <h3>أنضم النا</h3>
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
</section>