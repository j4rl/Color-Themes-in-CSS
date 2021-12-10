
<!DOCTYPE html>
<?php require_once("prog.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="ktm.css">
</head>
<body>
<?php
  $host="localhost";
  $user="root";
  $pass="";
  $db="petter";
  $conn=mysqli_connect($host,$user,$pass,$db);
  if(isset($_POST['btn'])){
       $url = $_POST['url'];
       $desc = $_POST['desc'];
       $sql="INSERT INTO tblLinx (txturl, txtdesc) VALUES ('$url', '$desc')";
       $result=mysqli_query($conn,$sql);
  }

?>
    <form action="index.php" method="POST">
        <input type="url" name="url" placeholder="https://" required>
        <input type="text" name="desc" placeholder="Skriv något om länken..." required>
        <input type="submit" name="btn" value="Skicka">
    </form>

<?php
    $sql="SELECT * FROM tblLinx";
    $result=mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)){
        echo "<p><a href='".$row['txturl']."'>".$row['txtdesc']."<a></p>";
    }


?>
    

</body>
</html>