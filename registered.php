<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register page</title>
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
$name = $_POST["name"];
$email = $_POST["email"];
$phno = $_POST["phno"];
$pass = $_POST["pass"];
$sql = "INSERT INTO data1 (name, email, phno,pass)
VALUES ('$name', '$email', '$phno','$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Hii $name you are registered succesfully";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
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
    </tbody>
    <a href="./index.php">see youself</a>
    </table>

</div></div>
</body>

</html>