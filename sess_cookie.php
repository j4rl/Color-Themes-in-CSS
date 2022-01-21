<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="ktm.css" rel="stylesheet" type="text/css">
    <?php
    session_start();
    $_SESSION['loggedin']=0;
    $_SESSION['user']="";
    setcookie("user","",time() + (86400 * 30),"/");

    $user="Arne";
    $pass="P455w0rd";
    if($user=="Arne" AND $pass=="P455w0rd"){
        echo "Inloggad";
        $_SESSION['loggedin']=1;
        $_SESSION['user']=$user;
        $_COOKIE['user']=$user;

    }else{
        echo "Fail!";
        $_SESSION['loggedin']=0;
        $_SESSION['user']="";
        $_COOKIE['user']="";
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