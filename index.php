
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
        if(isset($_POST['url'])){
            $urltext=$_POST['url'];
        }else{
            $urltext="";
        }
        if(isset($_POST['desc'])){
            $desctext=$_POST['desc'];
        }else{
            $desctext="";
        }
        $link="<a href='".$urltext."'>".$desctext."</a>";
        $sql="INSERT INTO tblLinx (txturl, txtdesc) VALUES ('$urltext', '$desctext')";
        $result=mysqli_query($conn,$sql);

    }else{
        $link="";
    }

?>
    <form action="index.php" method="POST">
        <input type="url" name="url" placeholder="https://" required>
        <input type="text" name="desc" placeholder="Skriv något om länken..." required>
        <input type="submit" name="btn" value="Skicka">
    </form>

    <?php
        $sql="SELECT * FROM tblLinx";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
            echo "<p>".$row['id']." <a href='".$row['txturl']."'>".$row['txtdesc']."</a> ".$row['status']."</p>";
        }
        mysqli_close($conn);
    ?>
    

</body>
</html>