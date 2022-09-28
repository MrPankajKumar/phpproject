<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="box">

            <?php
$server = "localhost";
$username = "id19630590_root";
$pass = "&o+4a84#HQ8Nv2V6";
$conn = mysqli_connect($server, $username, $pass, "id19630590_logusers");
if (!$conn) {
    die("gadbad" . mysqli_connect_error());
    
}
$email = $_POST["email"];
$pass = $_POST["pass"];
$sql = "SELECT * FROM data1 WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    if ($pass == $row["pass"]) {
        echo "Hii " . $row["name"] . " you are welcome ";
    }
    else {
        echo "<script>history.go(-1)</script>";
    }
}
else {
    echo "0 results";
}
$conn->close();
?>
    </tbody>
    <style>
        .box{
            height: 20vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: larger;
            font-weight: bold;
        }
        a{
            color: blue;
            padding: 1rem;
        }
    </style>
    <a href="./index.php">  see youself</a>
</table>
</div>
</div>
</body>

</html>