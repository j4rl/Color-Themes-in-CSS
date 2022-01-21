<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="dolce.css" rel="stylesheet" type="text/css">
    <?php require_once("php.php"); ?>
    <?php $db=new Database("localhost","root","","dbsdata"); ?>
    <?php
    session_start();
    $_SESSION['loggedin']=0;
    $_SESSION['user']="";
    setcookie("user","",time() + (86400 * 30),"/");

    $user="Arne";
    $pass="P455w0rd";
    if($user=="Arne" AND $pass=="P4550rd"){
        echo "Inloggad";
        $_SESSION['loggedin']=1;
        $_SESSION['user']=$user;
        setcookie("user",$user,time() + (86400 * 30),"/");

    }else{
        echo "Fail!";
        $_SESSION['loggedin']=0;
        $_SESSION['user']="";
        setcookie("user","",0,"/");
    }
    ?>
</head>
<body>
<div class="logo"><span class="BadBlue">&nbsp;L</span><span class="BadBlueBack" >nkr&nbsp;</span></div>
<div class="main">
    <?php
    echo "Sessionvariabel 'loggedin' är ".$_SESSION['loggedin']." och 'user' är ".$_SESSION['user']." <br/>";
    echo "Cookien 'user' är ".$_COOKIE['user']." <br/>"
    ?>
</div>

</body>
</html>