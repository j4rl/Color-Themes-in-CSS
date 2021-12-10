
<!DOCTYPE html>
<?php require_once("func.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="ktm.css">
</head>
<body>
    <form action="index.php" method="POST">
        <input type="url" name="url" placeholder="https://" required>
        <input type="text" name="desc" placeholder="Skriv något om länken..." required>
        <input type="submit" name="btn" value="Skicka">
    </form>

<?php
    getAllLinx($conn);
?>
    

</body>
</html>