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
<div class="suggbox">
        <div>
            <h3>ابحث هنا</h3>
        </div>
        <div class="member">
    <form method="POST" action="search.php">
        <input type="text" name="search" placeholder="Enter search term">
        <button type="">Search</button>
    </form>
</section>
        <?php
        $conn = mysqli_connect("localhost","root","","icedatabase");
        $searchTerm = $_POST['search'];

        $sql = "SELECT * FROM search WHERE lecture LIKE '%$searchTerm%'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr class='table'><th>ID</th><th>lecture</th><th>number</th><th>doctor</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr class='table'>";
                echo "<td class='table'>" . $row["id"] . "</td>";
                echo "<td>" . $row["lecture"] . "</td>";
                echo "<td>" . $row["number"] . "</td>";
                echo "<td>" . $row["doctor"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "No results found.";
        }
        $conn->close();
        ?>