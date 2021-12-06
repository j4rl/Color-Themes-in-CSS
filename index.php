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
    if(isset($_POST['btn'])){
        if(isset($_POST['temp'])){
            $htext=$_POST['temp'];
        }else{
            $htext="";
        }
        if(isset($_POST['ord'])){
            $ord=$_POST['ord'];
        }else{
            $ord="";
        }
        $htext=$htext." ".$ord;
    }else{
        $htext="";
        $ord="";
    }

?>
    <form action="index.php" method="POST">
        <input type="text" name="ord" placeholder="Skriv något...">
        <input type="hidden" name="temp" value="<?=$htext?>">
        <input type="submit" name="btn" value="Skicka">
    </form>

    <h1><?=$htext?></h1>

</body>
</html>