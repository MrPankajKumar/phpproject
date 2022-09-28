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
    <?php
$server = "localhost";
$username = "id19630590_root";
$pass = "&o+4a84#HQ8Nv2V6";
$conn = mysqli_connect($server, $username, $pass, "id19630590_logusers");
if (!$conn) {
    die("gadbad" . mysqli_connect_error());

}
?>
<div class="container">
<div class="box">

  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>mobile</th>
        <th>password</th>
      </tr>
    </thead>
    <tbody>
      <?php
             $limit=3;
             if(isset($_GET['page'])){
               $page=$_GET['page'];
              }else{
                $page=1;
              }
              $offset = ($page - 1) * $limit;
              $sql = "SELECT * from data1 LIMIT {$offset},{$limit}";
              $result = $conn->query($sql);
              
              $i = $offset + 1;
              if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                  echo "<tr>
                  <th>" . $i++ . "</th>
                  <th>" . $row["name"] . "</th>
                  <th>" . $row["email"] . "</th>
                  <th>" . $row["phno"] . "</th>
                  <th>" . $row["pass"] . "</th>
                  </tr>";
                }
  }
  else {
    echo "0 results";
  }
  
  ?>
        </tbody>
      </table>
      <?php
    $sql1 = "SELECT * FROM data1";
    $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");
    
    if(mysqli_num_rows($result1) > 0){
      
      $total_records = mysqli_num_rows($result1);
      
      $total_page = ceil($total_records / $limit);
      
      echo '<ul class="pagination admin-pagination">';
      
      if($page > 1){
        echo '<li><a href="index.php?page='.($page - 1).'">Prev</a></li>';
      }
      for($i = 1; $i <= $total_page; $i++){
        if($i == $page){
          $active = "active";
        }else{
          $active = "";
        }
        echo '<li class="'.$active.'"><a href="index.php?page='.$i.'">'.$i.'</a></li>';
      }
      if($total_page > $page){
        echo '<li><a href="index.php?page='.($page + 1).'">Next</a></li>';
      }
      
      echo '</ul>';
                }
                $conn->close();
                ?>
  <div id="log">
    <li>
      <a href="register.html">Register Youself</a>
    </li>
    <li>
      <a href="./login.html">Login</a>
    </li>
  </div>
</div>
</div>

</body>
</html>