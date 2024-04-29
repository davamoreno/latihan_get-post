<?php
$a = 10;
$b = 15;

if ($a < $b) {
    echo "benar";
} else {
    echo "salah";
}
 echo "<br>";
    for ($i=1; $i < 6; $i++) { 
        if($i % 2 == 1) {
            echo "ganjil";
        }
        else {
            echo "genap";
        }
        echo "<br>";
    }
?>
   <br>
<?php
function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
  }
  
  setHeight(350);
  setHeight(); // will use the default value of 50
  setHeight(135);
  setHeight(80);
  



 

?>

<a style="text-decoration:none" href="index.php"><</a>