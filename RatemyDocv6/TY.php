<!DOCTYPE html>
<?php 

$url = $_SERVER['REQUEST_URI'];
$urla = ltrim(stristr($url, '='), '=');

$id = substr($urla, 0, 1); 
$atnd = substr($urla, 1, 1); 
$marks = substr($urla, 2,1);
$tech = substr($urla, 3, 1);
$cum = substr($urla, 4, 1);
$nor = substr($urla, 5, 1);
$nuofr = intval( $nor );
$atndbe = substr($urla, 6, 1);
$atndfr = intval( $atndbe )+intval( $atnd );
$markbe = substr($urla, 7, 1);
$marksfr = intval( $markbe )+intval( $marks );
$techbe = substr($urla, 8, 1);
$techfr = intval( $techbe )+intval( $tech );
$cumbe = substr($urla, 9, 1);
$cumfr = intval( $cumbe )+intval( $cum );
$nuofr=$nuofr+1;
?>
<?php


$link = mysqli_connect("localhost", "root", "", "data_docs");
  
if($link === false){
    die("ERROR: Could not connect. " 
                . mysqli_connect_error());
}
  
$sql = "UPDATE docs SET marks=$marksfr, teaching=$techfr, attendance=$atndfr, communication=$cumfr, `number of rate`=$nuofr WHERE id=$id";
if(mysqli_query($link, $sql)){
    echo "Record was updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " 
                            . mysqli_error($link);
} 
mysqli_close($link);

?>
<html>
<body style="background-color:black;">
</body>
<meta http-equiv="refresh" content="0; url=TYUWU.HTML"/>
    </html>