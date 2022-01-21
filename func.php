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

  function getAllLinx($connObj){
    $sql="SELECT * FROM tblLinx";
    $result=mysqli_query($connObj, $sql);
    while($row=mysqli_fetch_assoc($result)){
        echo "<p><a href='".$row['txturl']."'>".$row['txtdesc']."<a></p>";
    }
}

function getArticle($strHeader, $strBy){
    $intRand=rand(2,5);
    $ret="";
    $ret=$ret."<article>";
    $ret=$ret."<h1>".$strHeader."</h1>";
    $ret=$ret."<p>".file_get_contents('https://loripsum.net/api/1/short')."</p>";
    $ret=$ret."<p>";
    $ret=$ret.file_get_contents('https://loripsum.net/api/'.$intRand.'/short')."</p>";
    $ret=$ret."<div class='byline'>by ".$strBy."</div>";
    $ret=$ret."</article>";
    return $ret;
}

?>