<!DOCTYPE html>
<html>
<head>
    <title>multitest</title>
</head>
<?php
$host="localhost";
$user="root";
$pass="";
$dbName="db_Charlie";
$conn=mysqli_connect($host,$user,$pass,$dbName);

?>
<body>
<?php
if(isset($_GET['del'])){
    $query="DELETE FROM tbl_linx WHERE id_linx=".intval($_GET['del']);
    $result=mysqli_query($conn,$query);
}

if (isset($_POST['btnSubmit'])){
    $dblinkURL=$_POST['txtURL'];
    $dblinkDesc=$_POST['txtDesc'];
    $query="INSERT INTO tbl_linx (url, description) VALUES ('$dblinkURL','$dblinkDesc')";
    $result=mysqli_query($conn,$query);
}
if (isset($_POST['editSubmit'])){
    $dblinkURL=$_POST['editURL'];
    $dblinkDesc=$_POST['editDesc'];
    $query="UPDATE tbl_linx SET url='$dblinkURL', description='$dblinkDesc' WHERE id_linx=".intval($_POST['editID']);
    $result=mysqli_query($conn,$query);
}

if(isset($_GET['edit'])){
    $fetchstuff = "SELECT * FROM tbl_linx WHERE id_linx=".intval($_GET['edit']);
    $result = mysqli_query($conn, $fetchstuff);
    $edit=$result->fetch_assoc();
    ?>
    <form name="frmEdit" id="frmEdit" action="multitest.php" method="post">
        <input type="text" name="editURL" id="editURL" value="<?php echo $edit['url']; ?>" />
        <input type="text" name="editDesc" id="editDesc" value="<?php echo $edit['description']; ?>"/>
        <input type="hidden" name="editID" value="<?php echo $edit['id_linx']; ?>"/>
        <button type="submit" name="editSubmit" value="Lägg till">Ändra</button>
    </form>
<?php
}else {

    ?>
    <form name="frmLinx" id="frmLinx" action="multitest.php" method="post">
        <input type="text" name="txtURL" id="txtURL" required placeholder="Ange URL inklusive http://"/>
        <input type="text" name="txtDesc" id="txtDesc" required placeholder="Beskrivning"/>
        <button type="submit" name="btnSubmit" value="Lägg till">Lägg till</button>
    </form>
    <hr/>
    <?php
    $fetchstuff = "SELECT * FROM tbl_linx";
    $result = mysqli_query($conn, $fetchstuff);
    while ($rad = $result->fetch_assoc()) {
        echo "<a href='" . $rad['url'] . "'>" . $rad['description'] . "</a>&nbsp;<a href='multitest.php?del=" . $rad['id_linx'] . "'>x</a>&nbsp;<a href='multitest.php?edit=" . $rad['id_linx'] . "'>c</a><br/>";
    }
}
    $conn->close();
?>
</body>
</html>
